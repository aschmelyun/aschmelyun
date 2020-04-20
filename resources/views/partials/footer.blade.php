<footer class="px-6 lg:px-16 mt-8 py-8">
    <div class="flex flex-wrap justify-between items-center">
        <p class="text-lg font-semibold mb-4 lg:mb-0">&copy;{{ date('Y') }} Andrew Schmelyun</p>
        <p class="text-lg text-gray-700 leading-relaxed">Built with <a href="https://usecleaver.com" class="font-semibold text-gray-900 hover:text-red-600 transition-colors duration-200" target="_blank" rel="noreferrer">Cleaver</a>, entire source on <a href="https://github.com/aschmelyun/aschmelyun" class="font-semibold text-gray-900 hover:text-red-600 transition-colors duration-200" target="_blank" rel="noreferrer">GitHub</a>. Here's <a href="/uses" class="font-semibold text-gray-900 hover:text-red-600 transition-colors duration-200">what I use</a>.</a></p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ $mix['/assets/js/app.js'] }}"></script>
@yield('bottom-scripts')