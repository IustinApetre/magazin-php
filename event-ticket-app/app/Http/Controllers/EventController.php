<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Log;
use App\Models\Event;

class EventController extends Controller
{
    public function showCreateEventForm(){
        return view('event.createEvent'); // Afișează formularul de createEvent

    }
    public function storePartner(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|string',
            'logo' => 'required|string',
            'description' => 'required|string',
        ]);

        // Salvează informațiile în baza de date
        $partner = Partner::create([

            'name' => $validatedData['name'],
            'logo' => $validatedData['logo'],
            'description' => $validatedData['description'],
        ]);

        // Poți face și alte operații sau redirecționa utilizatorul către altă pagină după ce sponsorul a fost adăugat
        return redirect()->intended('/storePartner');

    }
   public function storeSponsor(Request $request){
       {
           $validatedData = $request->validate([

               'name' => 'string',
               'logo' => 'string',
               'description' => 'string',
           ]);

           // Salvează informațiile în baza de date
           $sponsor = Sponsor::create([

               'name' => $validatedData['name'],
               'logo' => $validatedData['logo'],
               'description' => $validatedData['description'],
           ]);

           // Poți face și alte operații sau redirecționa utilizatorul către altă pagină după ce sponsorul a fost adăugat

           return redirect()->intended('/storeSponsor');
       }
   }
    public function createEvent()
    {
        $partners = Partner::all(); // Sau altă logică pentru a obține partenerii din baza de date
        $sponsors = Sponsor::all();
        return view('event.createEvent', compact('partners', 'sponsors'));

    }
    public function storeEvent(Request $request){
        $validatedData = $request->validate([

            'title' => 'string',
            'image' => 'string',
            'description' => 'string',
            'presentation' => 'string',
            'session' => 'string',
            'workshop' => 'string',
            'activity' => 'string',
            'phone' => 'string',
            'price' => 'integer',
            'location' => 'string',
            'time' => 'string',
            'date' => 'string',
        ]);
       $event= Event::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'session' => $validatedData['session'],
            'image' => $validatedData['image'],
            'presentation' => $validatedData['presentation'],
            'workshop' => $validatedData['workshop'],
            'activity' => $validatedData['activity'],
            'phone' => $validatedData['phone'],
            'price' => $validatedData['price'],
            'location' => $validatedData['location'],
            'time' => $validatedData['time'],
            'date' => $validatedData['date'],
        ]);
        if ($request->has('partners')) {
            $event->partners()->attach($request->input('partners'));
        }
        if ($request->has('sponsors')) {
            $event->sponsors()->attach($request->input('sponsors'));
        }


      return redirect('/viewClientInterface');




    }
    public function show(Request $request)
    {  $id = $request->query('id');
        $event = Event::find($id ); // presupunând că modelul tău este numit Event

        return view('event.mainEventPage', compact('event'));

    }
    public function showSponsors(Request $request)
    {  $id = $request->query('id');
        $event = Event::find($id ); // presupunând că modelul tău este numit Event

            return view('event.sponsorEventPage', compact('event'));

    }
    public function showPartners(Request $request)
    {  $id = $request->query('id');
        $event = Event::find($id ); // presupunând că modelul tău este numit Event

            return view('event.partnerEventPage', compact('event'));

    }

    public function showAgenda(Request $request)
    {  $id = $request->query('id');
        $event = Event::find($id ); // presupunând că modelul tău este numit Event

            return view('event.agendaEventPage', compact('event'));

    }
    public function showContact(Request $request)
    {  $id = $request->query('id');
        $event = Event::find($id ); // presupunând că modelul tău este numit Event

        return view('event.contactEventPage', compact('event'));

    }


    public function destroy(Request $request)
    { $id = $request->query('id');
        $events = Event::find($id);


        $events->delete();



        return redirect('/viewClientInterface');
    }
   public function editPageEvent(Request $request){
       $id = $request->query('id');
       $event = Event::find($id ); // presupunând că modelul tău este numit Event
       $partners = Partner::all(); // Sau altă logică pentru a obține partenerii din baza de date
       $sponsors = Sponsor::all();
       return view('event.editEventPage', compact('event','partners', 'sponsors'));
   }
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id); // Găsește evenimentul sau aruncă o excepție 404 dacă nu există

        // Validează datele primite din formular (în funcție de nevoile tale)
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',

            'presentation' => 'string',
            'session' => 'string',
            'workshop' => 'string',
            'activity' => 'string',
            'phone' => 'string',
            'price' => 'integer',
            'location' => 'string',
            'time' => 'string',
            'date' => 'string',
            // Alte reguli de validare pentru alte câmpuri
        ]);

        // Actualizează detaliile evenimentului cu datele primite din formular
        $event->update($validatedData);

        // Redirectează către pagina unde sunt afișate toate evenimentele
        return redirect ("viewClientInterface");
    }
    public function submitForm(Request  $request){
        $id = $request->query('id');
        $event = Event::find($id ); // presupunând că modelul tău este numit Event
        $partners = Partner::all(); // Sau altă logică pentru a obține partenerii din baza de date
        $sponsors = Sponsor::all();
        return view('event.contactEventPage', compact('event','partners', 'sponsors'))->with("The message was sent");;


    }
}
