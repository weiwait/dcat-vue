@php($id = join('_', (array)str_replace(['[', ']'], '', $name)) . '_' . Str::random(6))

<div class="{{$viewClass['form-group']}}" >

    <label class="{{$viewClass['label']}} control-label pt-0">{!! $label !!}</label>

    <div class="{{$viewClass['field']}}" id="{{ $id }}">

    </div>
</div>
<script type="module">
    import app from '/vendor/dcat-admin-extensions/weiwait/dcat-vue/js/index.js';
    const App = app()

    App.provide('provides', @json($provides, true))
    App.mount('#{{ $id }}')
</script>
