@forelse($temperatures as $temp)
<p>Time: {{$temp->created_at}}, Temperature: {{$temp->temperature}}, Humidity: {{$temp->humidity}}, Room: {{$temp->room}}</p>
@empty
<p>nothing to see here</p>
@endforelse
