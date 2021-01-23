<footer class="text-gray-600 body-font overflow-hidden mt-12">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center items-center justify-between">
        <div class="mb-10 px-4 text-left">
            <p class="mb-2 font-medium">&copy;{{ date('Y') }} Andrew Schmelyun</p>
            <p>This site is powered by <span class="inline-block py-0.5 px-2 rounded bg-white text-gray-600 border border-gray-600 text-xs font-medium tracking-widest">CLEAVER 🔥🔪</span></p>
        </div>
        <div class="mb-10 px-4 text-right">
            <p class="mb-2 font-medium">Follow me</p>
            <p>Twitter &mdash; GitHub &mdash; Patreon &mdash; Dev.to</p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ $mix['/assets/js/app.js'] }}"></script>
@yield('bottom-scripts')