@php($id = $column . random_int(123456, 987654))

<div class="{{$viewClass['form-group']}}" >

    <label class="{{$viewClass['label']}} control-label pt-0">{!! $label !!}</label>

    <div class="{{$viewClass['field']}}" id="{{ $id }}">

    </div>
</div>
<script type="module" id="{{$column}}">
    import app from '/vendor/dcat-admin-extensions/weiwait/dcat-vue/js/index.js';
    const App = app()

    App.provide('provides', @json($provides, true))
    App.mount('#{{ $id }}')
</script>
