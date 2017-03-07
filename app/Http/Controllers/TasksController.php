<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tasks;

class TasksController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
   $this->middleware('auth');
     }

    public function index()
    {
        return view ( 'tasks/index', [
            'Tasks' => Tasks::orderBy ( 'name', 'asc' )->get (),
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ( 'tasks/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Check if the form was correctly filled in
      $this->validate ( $request, [
          'name' => 'required|max:255',
      ] );
      // Create new Location object with the info in the request
      $location = Location::create ( [
          'name' => $request ['name'],
      ] );
      // Save this object in the database
      $location->save ();
      // Redirect to the location.index page with a success message.
      return redirect ( 'tasks' )->with( 'success', $location->name.' is toegevoegd.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ( 'tasks/show', [
          'tasks' => Tasks::findOrFail($id),
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ( 'tasks/edit', [
          'tasks' => Location::findOrFail($id)
        ] );
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
        // Check if the form was correctly filled in
        $this->validate ( $request, [
            'name' => 'required|max:255',
        ] );

        $location = Tasks::findorfail ( $id );
        $location->name = $request ['name'];
        // Save the changes in the database
        $location->save ();

        // Redirect to the location.index page with a success message.
        return redirect ( 'tasks' )->with( 'success', $location->name.' is bijgewerkt.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find the location object in the database
        $location = Location::findorfail ( $id );
        //Remove the location from the database
        $location->delete ();
        //Redirect to the location. index page with a succes message.
        return redirect ( 'location' )->with( 'success', $location->name.' is verwijderd.');
    }
}
