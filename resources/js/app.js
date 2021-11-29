require('./bootstrap');

// Yajra Datatables
require("datatables.net/js/jquery.dataTables.min");
require("datatables.net-bs4/js/dataTables.bootstrap4.js");

window.$ = window.jQuery = require("jquery");

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
