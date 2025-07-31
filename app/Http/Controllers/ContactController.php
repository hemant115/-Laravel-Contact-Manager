<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ContactController extends Controller
{
    
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    
    public function create()
    {
        return view('contacts.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        Contact::create($request->only('name', 'phone'));

        return redirect()->route('contacts.index')->with('success', 'Contact added successfully!');
    }

   
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

   
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $contact->update($request->only('name', 'phone'));

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

   
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }

   
    public function importXmlForm()
    {
        return view('contacts.import');
    }




public function importXml(Request $request)
    {
        /** @var UploadedFile $file */
        $file = $request->file('xml_file');

        if (!$file || !$file->isValid()) {
            return response()->json(['error' => 'Invalid file upload'], 400);
        }

        $path = $file->getRealPath() ?: $file->getPathname();

        try {
            $xmlContent = file_get_contents($path);
            $xml = simplexml_load_string($xmlContent);

            if ($xml === false) {
                return response()->json(['error' => 'Failed to parse XML'], 422);
            }

            $imported = [];
            foreach ($xml->children() as $child) {
                $imported[] = [
                    'name' => (string) ($child->name ?? ''),
                    'phone' => (string) ($child->phone ?? '') // still stored in 'phone' column
                ];
            }

            $importedCount = 0;
            $skippedCount = 0;
            $skippedNames = [];

            foreach ($imported as $entry) {
                if (!empty($entry['name'])) {
                    $exists = Contact::where('name', $entry['name'])
                                     ->where('phone', $entry['phone'])
                                     ->exists();

                    if (!$exists) {
                        Contact::create([
                            'name' => $entry['name'],
                            'phone' => $entry['phone']
                        ]);
                        $importedCount++;
                    } else {
                        $skippedCount++;
                        $skippedNames[] = $entry['name'];
                    }
                }
            }

            $message = "{$importedCount} contacts imported successfully.";
            if ($skippedCount > 0) {
                $message .= " {$skippedCount} duplicate contacts skipped.";
                
            }

            return redirect()->route('contacts.index')->with('success', $message);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Unable to process file: ' . $e->getMessage()
            ], 500);
        }
    }




}