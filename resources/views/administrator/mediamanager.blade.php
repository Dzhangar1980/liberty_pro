@extends('layouts.milo-administrator')

@section('css')
    <!-- media-manager -->
    <link rel="stylesheet" href="../media-manager/css/media-manager.css">
@endsection 

@section('script')
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="../media-manager/js/media-manager.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
@endsection 

@section('content')
    <div id="app" name="app">
        <media-manager></media-manager>
    </div>
    <script>
        new Vue({
            el : '#app'
        });
    </script>
    
@endsection        
                   