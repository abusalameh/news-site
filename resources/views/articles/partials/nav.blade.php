<ul class="nav nav-tabs" id="myTab" role="tablist">
  @foreach ($languages as $index => $language) 
  <li class="nav-item">
    <a class="nav-link {{ $index == 0  ? 'active' : ''}}" id="{{ strtolower($language) }}-tab" data-toggle="tab" href="#{{ strtolower($language) }}" role="tab" aria-controls="{{ strtolower($language) }}" aria-selected="true">{{ $language }}</a>
  </li>
  @endforeach 
</ul>