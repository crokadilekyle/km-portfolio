@forelse($temperatures as $temp)
<p>Temperature: {{$temp->temperature}}, Room: {{$temp->room}}</p>
@empty
<p>nothing to see here</p>
@endforelse
