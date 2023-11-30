<x-layouts.main pageName="All Songs">

@section('content')
<x-songs-list :songs="$songs">
</x-songs-list>
@endsection

</x-layouts.main>
<x-layouts.main>
    <x-layouts.main pageName="All Songs">
        @section('content')
            <x-layouts.songs-list :songs="$songs" />
        @endsection
    </x-layouts.main>
</x-layouts.main>