"use strict";
(function() {
    var cacheVersion = "-170816";
    var staticImageCacheName = "image" + cacheVersion;
    var staticAssetsCacheName = "assets" + cacheVersion;
    var contentCacheName = "content" + cacheVersion;
    var vendorCacheName = "vendor" + cacheVersion;
    var maxEntries = 100;
    self.importScripts("https://cdnjs.cat.net/ajax/libs/sw-toolbox/3.6.1/sw-toolbox.js");
    self.toolbox.options.debug = false;
    self.toolbox.options.networkTimeoutSeconds = 5;

    /* staticImageCache */
    self.toolbox.router.get("/usr/uploads/(.*)/(.*)/(.*)", self.toolbox.cacheFirst, {
        origin: /kelvin\.mbioq\.com/,
        cache: {
            name: staticImageCacheName,
            maxEntries: maxEntries
        }
    });

    /* StaticAssetsCache */
    self.toolbox.router.get("/usr/themes/ob/(.*)", self.toolbox.networkFirst, {
        origin: /og9j919f5\.qnssl\.com/,
        cache: {
            name: staticAssetsCacheName,
            maxEntries: maxEntries
        }
    });
    /* self.toolbox.router.get("/js/(.*)", self.toolbox.networkFirst, { origin: /kelvin\.mbioq\.com/, }); */
    /* self.toolbox.router.get("/static/(.*)", self.toolbox.networkFirst, {
        origin: /kelvin\.mbioq\.com/,
        cache: {
            name: staticAssetsCacheName,
            maxEntries: maxEntries
        }
    }); */
    self.toolbox.router.get("/usr/themes/ob/font/(.*)", self.toolbox.cacheFirst, {
        origin: /og9j919f5\.qnssl\.com/,
        cache: {
            name: staticAssetsCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/(.*)", self.toolbox.cacheFirst, {
        origin: /cdnjs\.cat\.net/,
        cache: {
            name: staticAssetsCacheName,
            maxEntries: maxEntries
        }
    });

    /* ContentCache */
    self.toolbox.router.get("/(.*)/(.*)/(.*)/(.*).html(.*)", self.toolbox.networkFirst, {

        cache: {
            name: contentCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/(tag|category|about|gallery|archives|links|timeline)/(.*)", self.toolbox.networkFirst, {
        cache: {
            name: contentCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/$", self.toolbox.networkFirst, {
        cache: {
            name: contentCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/\?(.*)$", self.toolbox.networkFirst, {
        cache: {
            name: contentCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/", self.toolbox.networkFirst, {
        cache: {
            name: contentCacheName,
            maxEntries: maxEntries
        }
    });

    /* VendorCache */
    self.toolbox.router.get("/next/config.json", self.toolbox.networkOnly, { origin: /disqus\.com/, });
    self.toolbox.router.get("/api/(.*)", self.toolbox.networkOnly, { origin: /disqus\.com/, });
    self.toolbox.router.get("/(.*)", self.toolbox.cacheFirst, {
        origin: /a\.disquscdn\.com/,
        cache: {
            name: vendorCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/(.*)", self.toolbox.cacheFirst, {
        origin: /c\.disquscdn\.com/,
        cache: {
            name: vendorCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/(.*)", self.toolbox.cacheFirst, {
        origin: /uploads\.disquscdn\.com/,
        cache: {
            name: vendorCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/(.*)", self.toolbox.cacheFirst, {
        origin: /media\.disquscdn\.com/,
        cache: {
            name: vendorCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/(.*)", self.toolbox.cacheFirst, {
        origin: /referrer\.disqus\.com/,
        cache: {
            name: vendorCacheName,
            maxEntries: maxEntries
        }
    });
    self.toolbox.router.get("/(.*)", self.toolbox.networkOnly, {
        origin: /(www\.google-analytics\.com|ssl\.google-analytics\.com)/,
        cache: {
            name: vendorCacheName,
            maxEntries: maxEntries
        }
    });

    /* NoCache */
    self.toolbox.router.get("/sw.js", self.toolbox.networkFirst),
        self.toolbox.router.get("/(.*).php(.*)", self.toolbox.networkOnly),
        self.toolbox.router.get("/(.*)", self.toolbox.networkOnly, { origin: /ga\.fir\.im/, });

    self.addEventListener("install",
        function(event) {
            return event.waitUntil(self.skipWaiting())
        });
    self.addEventListener("activate",
        function(event) {
            return event.waitUntil(self.clients.claim())
        })
})();