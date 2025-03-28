<x-app>
    <h2>{{$Ninjas->name}}</h2>
    
    <div class="bg-gray-300 p-4 rounded">
        <p><strong>Skills Level:</strong>{{$Ninjas->skill}}</p>
        <p><strong>About Me:</strong></p>
        <p>{{$Ninjas->bio}}</p>
    </div>
</x-app>
