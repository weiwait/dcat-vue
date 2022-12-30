if (!window.dv) {
    window.dv = {instances: {}, maps: {wemap: false}}
}

// 腾讯地图加载
window.addEventListener('import.map.wemap', () => {
    if (window.dv.maps.wemap)  {
        window.dispatchEvent(new CustomEvent('imported.map.wemap'))
        return
    }

    window.loadedWeMap = function () {
        window.dv.maps.wemap = true
        window.dispatchEvent(new CustomEvent('imported.map.wemap'))
    }

    const script = document.createElement('script')
    script.src = 'https://map.qq.com/api/gljs?v=1.exp&key=ZZQBZ-WE6E2-FCMUZ-CBUZ7-ZW5I3-I7BIX&libraries=service&callback=loadedWeMap'
    // script.src = 'https://map.qq.com/api/js?v=2.exp&key=OB4BZ-D4W3U-B7VVO-4PJWW-6TKDJ-WPB77&callback=loadedWeMap'
    // script.src = 'https://wemapvis.map.qq.com/api/gljs/v2?v=1.exp&key=ZZQBZ-WE6E2-FCMUZ-CBUZ7-ZW5I3-I7BIX&callback=loadedWeMap'
    document.head.appendChild(script)
})

// 实例清理
setInterval(() => {
    for (let instance in window.dv.instances) {
        if (window.dv.instances[instance]) {
            if (!document.getElementById(window.dv.instances[instance]._container.id)) {
                window.dv.instances[instance].unmount()
                delete window.dv.instances[instance]
            }
        } else {
            delete window.dv.instances[instance]
        }
    }
}, 3000)
