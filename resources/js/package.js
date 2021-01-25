/**
 * NPM PACKAGES
 */

require('select2/dist/js/select2.full.js');
require('jszip');
require('pdfmake');
require('datatables.net-bs4');
require('datatables.net-buttons-bs4/js/buttons.bootstrap4.js');
require('datatables.net-colreorder-bs4/js/colReorder.bootstrap4.js');
require('datatables.net-rowreorder-bs4/js/rowReorder.bootstrap4.js');
require('datatables.net-responsive-bs4/js/responsive.bootstrap4.js');
require('datatables.net-fixedheader-bs4/js/fixedHeader.bootstrap4.js');
require('datatables.net-fixedcolumns-bs4/js/fixedColumns.bootstrap4.js');
require('datatables.net-select-bs4/js/select.bootstrap4.js');
require('datatables.net-buttons-bs4/js/buttons.bootstrap4.js');
require('datatables.net-buttons/js/buttons.colVis.js')();
require('datatables.net-buttons/js/buttons.flash.js')();
require('datatables.net-buttons/js/buttons.html5.js')();
require('datatables.net-buttons/js/buttons.print.js')();

import Swal from 'sweetalert2';
import moment from 'moment';

window.Swal = Swal;
window.moment = moment;

moment.locale('id');
