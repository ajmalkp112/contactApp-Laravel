<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class XmlImportController extends Controller
{
  public function import()
  {
    return view('Contacts.importxml');
  }

  public function importxml(Request $request)
  {
    $request->validate([
        'xml_file' => 'required|file', 
    ]);

    $file = $request->file('xml_file');

    $filePath = $file->getRealPath();

    $xml = simplexml_load_file($filePath);

    foreach ($xml->contact as $contact) {
        Contact::create([
            'name' => (string) $contact->name,
            'phone' => (string) $contact->phone,
        ]);
    }

    return redirect()->route('contacts.index')->with('message', 'Contacts imported successfully');
  }

}
