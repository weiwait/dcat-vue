<div class="{{$viewClass['form-group']}}" >

    <label class="{{$viewClass['label']}} control-label pt-0">{!! $label !!}</label>

    <div class="{{$viewClass['field']}}" id="{{ $vid }}">

    </div>
</div>
<script type="module">
    import app from '/vendor/dcat-admin-extensions/weiwait/dcat-vue/js/index.js';
    const App = app()

    App.provide('provides', @json($provides, true))
    App.mount('#{{ $vid }}')

    if (!window.dv) {
        window.dv = {instances: {}, maps: {wemap: false}}
    }

    window.dv.instances["{{ $vid }}"] = App
</script>
