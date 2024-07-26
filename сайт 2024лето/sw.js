const staticCacheName = 's-app-v1'

const assetUrls = [
    'index.html',
    'js/app.js',
    'stilll.css'
]

self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(staticCacheName).then(cache => cache.addAll(assetUrls))
    )
})
self.addEventListener('activate', event => {
    console.log('[SW]: activate')
})