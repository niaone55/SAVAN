<!-- {{$store[0]['book_name']}} -->
<!-- {{dump($store['book_name'])}}
{{dump($store->book_name)}} -->


<!-- 
public function login()
    {
        $user= Register::where('email', request('email'))->get();
       if (decrypt($user[0]->password)==request('password'))
       {
           request->session()->put('user', $user[0]->name);
           return redirect('home');

       } 

    } -->


    <div class="form-group">
                        <label for="formasuiv" id="formasuiv_label">Formation Suivie :</label>
                        <select type="text" id="formasuiv" name="formasuiv" autocomplete="off" >
                            <option value="{{ auth()->user()->formasuiv_id }}">{{ auth()->user()->formasuiv->formation }}</option>
                            @foreach($formations as $formation)
                            <option value="{{$formation->id}}">{{$formation->formation}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('formasuiv'))
                            <p class="error-msg">{{ $errors->first('formasuiv') }}</p>
                        @endif

                    </div>


                    DB::table('formasuivs_table')->insert([
            ['formasuiv'=>'cyber-sécurité'],
            ['formasuiv'=>'Developpement web et web mobil'],
            ['formasuiv'=>'Graphisme'],
            ['formasuiv'=>'administration de base de données'],
            ['formasuiv'=>'administration de réseau informatique'],
            ['formasuiv'=>'architecture'],
            ['formasuiv'=>'ref dig'],
            ['formasuiv'=>'web designer'],

        ]);

        ['nom', 'prenom'=>'Victore', 'Hugo'],
            ['nom', 'prenom'=>'L.S', 'Senghor'],
            ['nom', 'prenom'=>'Ahmadou', 'Kourouma'],
            ['nom', 'prenom'=>'Camara', 'Laye'],
            ['nom', 'prenom'=>'Albert', 'Camus'],
            ['nom', 'prenom'=>'David', 'Diop'],#

            
            <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
                <div class="container maron">
                  
                        <table class="tableau-style">
                        <thead>
                          <tr>
                            <th>Nom du livre</th>
                            <th>Date d'édition</th>
                            <th>Pays</th>
                            <th>Type</th>
                            <th>Nom de l'auteur</th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          @foreach($books as $book)
                            <tr>
                              <td> {{$book->book_name}} </td>
                              <td> {{$book->date}}</td>
                              <td>{{$book->country->nom}} </td>
                              <td> {{$book->type->nom}}</td>
                              <td> {{$book->auteur->nom}}</td>
                            </tr>
                            @endforeach
                        </table>
                        </div>            
          </div>
        </div>
      </div>