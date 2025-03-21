<x-app>
    <h2>Currently Avaliable Ninjas</h2>
    
    <ul>
       @foreach($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{$ninja['id']}}" :highlight="$ninja['skills'] > 70">
                    <h3>{{$ninja["name"]}}</h3>
                </x-card>
            </li>
       @endforeach
    </ul>
</x-app>