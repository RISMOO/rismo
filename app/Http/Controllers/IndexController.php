<?php

namespace App\Http\Controllers;

use App\Titre;
use App\Projet;
use App\Message;
use App\Formation;
use App\Competence;
use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{


    public function __construct()
    {


    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competences = Competence::all();
        $experiences = Experience::all();
        $formations = Formation::all();
        $projets = Projet::all();
        $titres = Titre::all();
        $messages=Message::all();


        return view('welcome')->with([
            'competences' => $competences,
            'experiences' => $experiences,
            'formations' => $formations,
            'projets' => $projets,
            'titres' => $titres,
            'messages'=>$messages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [

            /*nom'=>'alpha|between:3,20|required',*/
            /* 'email'=>'email|required',*/
            'message' => 'bail|between:3,255|required',

        ]);

        $validator = Validator::make($request->all(), [
            /*nom'=>'alpha|between:3,20|required',*/
            /* 'email'=>'email|required',*/
            'message' => 'between:3,255|required',



        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                ->withErrors($validator)
                ->withInput();
        }




        $message = new Message;
        $message->nom = auth()->user()->name;

        $message->message = $request->input('message');
        $message->published = $request->input('published') ? true : false;
        $message->user_id = auth()->user()->id;


        //image upload///
        // dd(Storage::url($message->photo));
        /* Exemple explode
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
*/


        $message->save();




      //   session()->flash( 'message', " Votre message a bien été envoyé et publié !");
        if ($message->published == true) {

            return redirect('/')->with('message',"Votre message a bien été envoyé et sera publié apres approbation");
        } else {

            return redirect('/')->with('message', " Votre message a bien été envoyé et ne sera pas publié ");
        }
    }







    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message=Message::find($id);

        if(auth()->user()->id !== $message->user_id){
          return redirect('/')->with('error','Non autorisé');
        }
        return view ('/')->with('message', $message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [

            /*nom'=>'alpha|between:3,20|required',*/
            /* 'email'=>'email|required',*/
            'message' => 'bail|between:3,255|required',

        ]);

        $validator = Validator::make($request->all(), [
            /*nom'=>'alpha|between:3,20|required',*/
            /* 'email'=>'email|required',*/
            'message' => 'between:3,255|required',



        ]);

        if ($validator->fails()) {
            return redirect('/home')
                ->withErrors($validator)
                ->withInput();
        }




        $message = Message::find($id);
       // $message->nom = auth()->user()->name;

        $message->message = $request->input('message');
        $message->published = $request->input('published') ? true : false;
       // $message->user_id = auth()->user()->id;


        //image upload///
        // dd(Storage::url($message->photo));
        /* Exemple explode
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
*/


        $message->save();




      //   session()->flash( 'message', " Votre message a bien été envoyé et publié !");
        if ($message->published == true) {

            return redirect('/')->with('message',"Votre message a bien été modifié et sera publié apres approbation");
        } else {

            return redirect('/')->with('message', " Votre message a bien été modifié et ne sera pas publié ");
        }
    }








    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $message= Message::find($id);
        $message->delete();
        if(auth()->user()->id !== $message->user_id){
          return redirect('/')->with('error','Non autorisé');
        }
        return redirect('/') ->with('message', " Votre message a bien été supprimé ");
    }
}
