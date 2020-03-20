<footer class="px-16 mt-8 py-8">
    <div class="flex flex-wrap justify-between items-center">
            <p class="text-lg font-semibold">&copy;{{ date('Y') }} Andrew Schmelyun</p>
        <p class="text-lg text-gray-700">This website was built with <a href="https://usecleaver.com" class="font-semibold text-gray-900 hover:text-red-600 transition-colors duration-200" target="_blank" rel="noreferrer">Cleaver</a>, and the entire source is on <a href="https://github.com/aschmelyun/aschmelyun" class="font-semibold text-gray-900 hover:text-red-600 transition-colors duration-200" target="_blank" rel="noreferrer">GitHub</a>.</p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ $mix['/assets/js/app.js'] }}"></script>
@yield('bottom-scripts')