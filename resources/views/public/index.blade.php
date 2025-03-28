<x-app>
    <h2>Currently Avaliable Ninjas</h2>
    
    <ul>
       @foreach($Ninjas as $Ninja)
            <li>
                <x-card href="/ninjas/{{$Ninja->id}}" :highlight="$Ninja->skill >70">
                    <h3>{{$Ninja->name}}</h3>
                </x-card>
            </li>
       @endforeach
    </ul>
  

{{$Ninjas->links()}}

</x-app>