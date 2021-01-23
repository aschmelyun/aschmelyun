window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

window.Vue = require('vue');

const hljs = require('highlight.js');
const hljsDefineVue = require('highlightjs-vue');

hljsDefineVue(hljs);

document.querySelectorAll('pre > code').forEach(block => {
    hljs.highlightBlock(block);
});