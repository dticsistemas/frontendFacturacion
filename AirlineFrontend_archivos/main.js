"use strict";
(self["webpackChunkairline_frontend"] = self["webpackChunkairline_frontend"] || []).push([["main"],{

/***/ 7723:
/*!*******************************************************************!*\
  !*** ./src/app/api-http/flight-program/flight-program.service.ts ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "FlightProgramService": () => (/* binding */ FlightProgramService)
/* harmony export */ });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ 2560);
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common/http */ 8987);


class FlightProgramService {
    constructor(http) {
        this.http = http;
    }
    getAll() {
        return this.http.get('http://137.184.195.26/api/flight_programs');
    }
}
FlightProgramService.ɵfac = function FlightProgramService_Factory(t) { return new (t || FlightProgramService)(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_common_http__WEBPACK_IMPORTED_MODULE_1__.HttpClient)); };
FlightProgramService.ɵprov = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({ token: FlightProgramService, factory: FlightProgramService.ɵfac, providedIn: 'root' });


/***/ }),

/***/ 158:
/*!***************************************!*\
  !*** ./src/app/app-routing.module.ts ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "AppRoutingModule": () => (/* binding */ AppRoutingModule)
/* harmony export */ });
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ 124);
/* harmony import */ var _pages_flights_page_flights_page_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./pages/flights-page/flights-page.component */ 2977);
/* harmony import */ var _invoices_list_invoices_list_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./invoices-list/invoices-list.component */ 9882);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/core */ 2560);





const routes = [
    { path: '', component: _pages_flights_page_flights_page_component__WEBPACK_IMPORTED_MODULE_0__.FlightsPageComponent },
    { path: 'flights', component: _pages_flights_page_flights_page_component__WEBPACK_IMPORTED_MODULE_0__.FlightsPageComponent },
    { path: 'invoices', component: _invoices_list_invoices_list_component__WEBPACK_IMPORTED_MODULE_1__.InvoicesListComponent }
];
class AppRoutingModule {
}
AppRoutingModule.ɵfac = function AppRoutingModule_Factory(t) { return new (t || AppRoutingModule)(); };
AppRoutingModule.ɵmod = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵdefineNgModule"]({ type: AppRoutingModule });
AppRoutingModule.ɵinj = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵdefineInjector"]({ imports: [_angular_router__WEBPACK_IMPORTED_MODULE_3__.RouterModule.forRoot(routes), _angular_router__WEBPACK_IMPORTED_MODULE_3__.RouterModule] });
(function () { (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵsetNgModuleScope"](AppRoutingModule, { imports: [_angular_router__WEBPACK_IMPORTED_MODULE_3__.RouterModule], exports: [_angular_router__WEBPACK_IMPORTED_MODULE_3__.RouterModule] }); })();


/***/ }),

/***/ 5041:
/*!**********************************!*\
  !*** ./src/app/app.component.ts ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "AppComponent": () => (/* binding */ AppComponent)
/* harmony export */ });
/* harmony import */ var _state_management_actions__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./state-management/actions */ 4619);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ 2560);
/* harmony import */ var _ngrx_store__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @ngrx/store */ 3488);
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ 124);




class AppComponent {
    constructor(store) {
        this.store = store;
        this.title = 'airline-frontend';
    }
    ngOnInit() {
        this.store.dispatch(_state_management_actions__WEBPACK_IMPORTED_MODULE_0__.FlightProgramActions.loadFlightPrograms());
    }
}
AppComponent.ɵfac = function AppComponent_Factory(t) { return new (t || AppComponent)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdirectiveInject"](_ngrx_store__WEBPACK_IMPORTED_MODULE_2__.Store)); };
AppComponent.ɵcmp = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineComponent"]({ type: AppComponent, selectors: [["app-root"]], decls: 15, vars: 0, consts: [["role", "banner", 1, "toolbar"], ["width", "40", "alt", "Angular Logo", "src", "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNTAgMjUwIj4KICAgIDxwYXRoIGZpbGw9IiNERDAwMzEiIGQ9Ik0xMjUgMzBMMzEuOSA2My4ybDE0LjIgMTIzLjFMMTI1IDIzMGw3OC45LTQzLjcgMTQuMi0xMjMuMXoiIC8+CiAgICA8cGF0aCBmaWxsPSIjQzMwMDJGIiBkPSJNMTI1IDMwdjIyLjItLjFWMjMwbDc4LjktNDMuNyAxNC4yLTEyMy4xTDEyNSAzMHoiIC8+CiAgICA8cGF0aCAgZmlsbD0iI0ZGRkZGRiIgZD0iTTEyNSA1Mi4xTDY2LjggMTgyLjZoMjEuN2wxMS43LTI5LjJoNDkuNGwxMS43IDI5LjJIMTgzTDEyNSA1Mi4xem0xNyA4My4zaC0zNGwxNy00MC45IDE3IDQwLjl6IiAvPgogIDwvc3ZnPg=="], [1, "spacer"], ["aria-label", "Angular on twitter", "target", "_blank", "rel", "noopener", "href", "https://twitter.com/angular", "title", "Twitter"], ["id", "twitter-logo", "height", "24", "data-name", "Logo", "xmlns", "http://www.w3.org/2000/svg", "viewBox", "0 0 400 400"], ["width", "400", "height", "400", "fill", "none"], ["d", "M153.62,301.59c94.34,0,145.94-78.16,145.94-145.94,0-2.22,0-4.43-.15-6.63A104.36,104.36,0,0,0,325,122.47a102.38,102.38,0,0,1-29.46,8.07,51.47,51.47,0,0,0,22.55-28.37,102.79,102.79,0,0,1-32.57,12.45,51.34,51.34,0,0,0-87.41,46.78A145.62,145.62,0,0,1,92.4,107.81a51.33,51.33,0,0,0,15.88,68.47A50.91,50.91,0,0,1,85,169.86c0,.21,0,.43,0,.65a51.31,51.31,0,0,0,41.15,50.28,51.21,51.21,0,0,1-23.16.88,51.35,51.35,0,0,0,47.92,35.62,102.92,102.92,0,0,1-63.7,22A104.41,104.41,0,0,1,75,278.55a145.21,145.21,0,0,0,78.62,23", "fill", "#fff"], ["aria-label", "Angular on YouTube", "target", "_blank", "rel", "noopener", "href", "https://youtube.com/angular", "title", "YouTube"], ["id", "youtube-logo", "height", "24", "width", "24", "data-name", "Logo", "xmlns", "http://www.w3.org/2000/svg", "viewBox", "0 0 24 24", "fill", "#fff"], ["d", "M0 0h24v24H0V0z", "fill", "none"], ["d", "M21.58 7.19c-.23-.86-.91-1.54-1.77-1.77C18.25 5 12 5 12 5s-6.25 0-7.81.42c-.86.23-1.54.91-1.77 1.77C2 8.75 2 12 2 12s0 3.25.42 4.81c.23.86.91 1.54 1.77 1.77C5.75 19 12 19 12 19s6.25 0 7.81-.42c.86-.23 1.54-.91 1.77-1.77C22 15.25 22 12 22 12s0-3.25-.42-4.81zM10 15V9l5.2 3-5.2 3z"], [1, "container", 2, "margin-top", "70px"]], template: function AppComponent_Template(rf, ctx) { if (rf & 1) {
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](0, "div", 0);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](1, "img", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](2, "span");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](3, "Nombre de nuestra aerolinea");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](4, "div", 2);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](5, "a", 3);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵnamespaceSVG"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](6, "svg", 4);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](7, "rect", 5)(8, "path", 6);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]()();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵnamespaceHTML"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](9, "a", 7);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵnamespaceSVG"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](10, "svg", 8);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](11, "path", 9)(12, "path", 10);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]()()();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵnamespaceHTML"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](13, "main", 11);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](14, "router-outlet");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
    } }, dependencies: [_angular_router__WEBPACK_IMPORTED_MODULE_3__.RouterOutlet], styles: ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJhcHAuY29tcG9uZW50LnNjc3MifQ== */", "[_nghost-%COMP%] {\n    font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";\n    font-size: 14px;\n    color: #333;\n    box-sizing: border-box;\n    -webkit-font-smoothing: antialiased;\n    -moz-osx-font-smoothing: grayscale;\n  }\n\n  h1[_ngcontent-%COMP%], h2[_ngcontent-%COMP%], h3[_ngcontent-%COMP%], h4[_ngcontent-%COMP%], h5[_ngcontent-%COMP%], h6[_ngcontent-%COMP%] {\n    margin: 8px 0;\n  }\n\n  p[_ngcontent-%COMP%] {\n    margin: 0;\n  }\n\n  .spacer[_ngcontent-%COMP%] {\n    flex: 1;\n  }\n\n  .toolbar[_ngcontent-%COMP%] {\n    position: absolute;\n    top: 0;\n    left: 0;\n    right: 0;\n    height: 60px;\n    display: flex;\n    align-items: center;\n    background-color: #1976d2;\n    color: white;\n    font-weight: 600;\n  }\n\n  .toolbar[_ngcontent-%COMP%]   img[_ngcontent-%COMP%] {\n    margin: 0 16px;\n  }\n\n  .toolbar[_ngcontent-%COMP%]   #twitter-logo[_ngcontent-%COMP%] {\n    height: 40px;\n    margin: 0 8px;\n  }\n\n  .toolbar[_ngcontent-%COMP%]   #youtube-logo[_ngcontent-%COMP%] {\n    height: 40px;\n    margin: 0 16px;\n  }\n\n  .toolbar[_ngcontent-%COMP%]   #twitter-logo[_ngcontent-%COMP%]:hover, .toolbar[_ngcontent-%COMP%]   #youtube-logo[_ngcontent-%COMP%]:hover {\n    opacity: 0.8;\n  }"] });


/***/ }),

/***/ 6747:
/*!*******************************!*\
  !*** ./src/app/app.module.ts ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "AppModule": () => (/* binding */ AppModule)
/* harmony export */ });
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/platform-browser */ 4497);
/* harmony import */ var _app_routing_module__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./app-routing.module */ 158);
/* harmony import */ var _app_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./app.component */ 5041);
/* harmony import */ var _state_management_state_management_module__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./state-management/state-management.module */ 5237);
/* harmony import */ var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @ng-bootstrap/ng-bootstrap */ 4534);
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/common/http */ 8987);
/* harmony import */ var _pages_flights_page_flights_page_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./pages/flights-page/flights-page.component */ 2977);
/* harmony import */ var _invoices_list_invoices_list_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./invoices-list/invoices-list.component */ 9882);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/core */ 2560);









class AppModule {
}
AppModule.ɵfac = function AppModule_Factory(t) { return new (t || AppModule)(); };
AppModule.ɵmod = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_5__["ɵɵdefineNgModule"]({ type: AppModule, bootstrap: [_app_component__WEBPACK_IMPORTED_MODULE_1__.AppComponent] });
AppModule.ɵinj = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_5__["ɵɵdefineInjector"]({ imports: [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_6__.BrowserModule,
        _app_routing_module__WEBPACK_IMPORTED_MODULE_0__.AppRoutingModule,
        _state_management_state_management_module__WEBPACK_IMPORTED_MODULE_2__.StateManagementModule,
        _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_7__.NgbModule,
        _angular_common_http__WEBPACK_IMPORTED_MODULE_8__.HttpClientModule] });
(function () { (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_5__["ɵɵsetNgModuleScope"](AppModule, { declarations: [_app_component__WEBPACK_IMPORTED_MODULE_1__.AppComponent,
        _pages_flights_page_flights_page_component__WEBPACK_IMPORTED_MODULE_3__.FlightsPageComponent,
        _invoices_list_invoices_list_component__WEBPACK_IMPORTED_MODULE_4__.InvoicesListComponent], imports: [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_6__.BrowserModule,
        _app_routing_module__WEBPACK_IMPORTED_MODULE_0__.AppRoutingModule,
        _state_management_state_management_module__WEBPACK_IMPORTED_MODULE_2__.StateManagementModule,
        _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_7__.NgbModule,
        _angular_common_http__WEBPACK_IMPORTED_MODULE_8__.HttpClientModule] }); })();


/***/ }),

/***/ 9882:
/*!**********************************************************!*\
  !*** ./src/app/invoices-list/invoices-list.component.ts ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "InvoicesListComponent": () => (/* binding */ InvoicesListComponent)
/* harmony export */ });
/* harmony import */ var _state_management_selectors__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../state-management/selectors */ 8757);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ 2560);
/* harmony import */ var _ngrx_store__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @ngrx/store */ 3488);
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/common */ 4666);




function InvoicesListComponent_tr_17_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](0, "tr")(1, "th", 3);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](3, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](4, "img", 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](5);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](6, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](7, "img", 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](8);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](9, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](10);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](11, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](12);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]()();
} if (rf & 2) {
    const flightProgram_r1 = ctx.$implicit;
    const i_r2 = ctx.index;
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate"](i_r2 + 1);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵproperty"]("src", "https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg", _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵsanitizeUrl"]);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate1"](" ", flightProgram_r1.source_airport_code, " ");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵproperty"]("src", "https://upload.wikimedia.org/wikipedia/commons/c/cf/Flag_of_Canada.svg", _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵsanitizeUrl"]);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate1"](" ", flightProgram_r1.destiny_airport_code, " ");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate"](flightProgram_r1.flight == null ? null : flightProgram_r1.flight.startTime);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate"](flightProgram_r1.flight == null ? null : flightProgram_r1.flight.endTime);
} }
class InvoicesListComponent {
    constructor(store) {
        this.store = store;
        this.flightPrograms = [];
    }
    ngOnInit() {
        this.store.select(_state_management_selectors__WEBPACK_IMPORTED_MODULE_0__.getFlightPrograms)
            .subscribe(flightPrograms => this.flightPrograms = flightPrograms);
    }
}
InvoicesListComponent.ɵfac = function InvoicesListComponent_Factory(t) { return new (t || InvoicesListComponent)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdirectiveInject"](_ngrx_store__WEBPACK_IMPORTED_MODULE_2__.Store)); };
InvoicesListComponent.ɵcmp = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineComponent"]({ type: InvoicesListComponent, selectors: [["app-invoices-list"]], decls: 18, vars: 1, consts: [[1, "table", "table-striped"], ["scope", "col"], [4, "ngFor", "ngForOf"], ["scope", "row"], ["alt", "flag image", 1, "me-2", 2, "width", "20px", 3, "src"]], template: function InvoicesListComponent_Template(rf, ctx) { if (rf & 1) {
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](0, "h4");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](1, "Invoices List");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](2, "hr");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](3, "table", 0)(4, "thead")(5, "tr")(6, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](7, "#");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](8, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](9, "Source airport code");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](10, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](11, "Destiny airport code");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](12, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](13, "Start time");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](14, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](15, "End time");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]()()();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](16, "tbody");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtemplate"](17, InvoicesListComponent_tr_17_Template, 13, 7, "tr", 2);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]()();
    } if (rf & 2) {
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](17);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵproperty"]("ngForOf", ctx.flightPrograms);
    } }, dependencies: [_angular_common__WEBPACK_IMPORTED_MODULE_3__.NgForOf], styles: ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJpbnZvaWNlcy1saXN0LmNvbXBvbmVudC5zY3NzIn0= */"] });


/***/ }),

/***/ 2977:
/*!**************************************************************!*\
  !*** ./src/app/pages/flights-page/flights-page.component.ts ***!
  \**************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "FlightsPageComponent": () => (/* binding */ FlightsPageComponent)
/* harmony export */ });
/* harmony import */ var _state_management_selectors__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../state-management/selectors */ 8757);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ 2560);
/* harmony import */ var _ngrx_store__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @ngrx/store */ 3488);
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/common */ 4666);




function FlightsPageComponent_tr_17_Template(rf, ctx) { if (rf & 1) {
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](0, "tr")(1, "th", 3);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](3, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](4, "img", 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](5);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](6, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](7, "img", 4);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](8);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](9, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](10);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](11, "td");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](12);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]()();
} if (rf & 2) {
    const flightProgram_r1 = ctx.$implicit;
    const i_r2 = ctx.index;
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate"](i_r2 + 1);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵproperty"]("src", "https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg", _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵsanitizeUrl"]);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate1"](" ", flightProgram_r1.source_airport_code, " ");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵproperty"]("src", "https://upload.wikimedia.org/wikipedia/commons/c/cf/Flag_of_Canada.svg", _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵsanitizeUrl"]);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](1);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate1"](" ", flightProgram_r1.destiny_airport_code, " ");
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate"](flightProgram_r1.flight == null ? null : flightProgram_r1.flight.startTime);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](2);
    _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtextInterpolate"](flightProgram_r1.flight == null ? null : flightProgram_r1.flight.endTime);
} }
class FlightsPageComponent {
    constructor(store) {
        this.store = store;
        this.flightPrograms = [];
    }
    ngOnInit() {
        this.store.select(_state_management_selectors__WEBPACK_IMPORTED_MODULE_0__.getFlightPrograms)
            .subscribe(flightPrograms => this.flightPrograms = flightPrograms);
    }
}
FlightsPageComponent.ɵfac = function FlightsPageComponent_Factory(t) { return new (t || FlightsPageComponent)(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdirectiveInject"](_ngrx_store__WEBPACK_IMPORTED_MODULE_2__.Store)); };
FlightsPageComponent.ɵcmp = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineComponent"]({ type: FlightsPageComponent, selectors: [["app-flights-page"]], decls: 18, vars: 1, consts: [[1, "table", "table-striped"], ["scope", "col"], [4, "ngFor", "ngForOf"], ["scope", "row"], ["alt", "flag image", 1, "me-2", 2, "width", "20px", 3, "src"]], template: function FlightsPageComponent_Template(rf, ctx) { if (rf & 1) {
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](0, "h4");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](1, "Flight programs");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelement"](2, "hr");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](3, "table", 0)(4, "thead")(5, "tr")(6, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](7, "#");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](8, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](9, "Source airport code");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](10, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](11, "Destiny airport code");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](12, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](13, "Start time");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](14, "th", 1);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtext"](15, "End time");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]()()();
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementStart"](16, "tbody");
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵtemplate"](17, FlightsPageComponent_tr_17_Template, 13, 7, "tr", 2);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵelementEnd"]()();
    } if (rf & 2) {
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵadvance"](17);
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵproperty"]("ngForOf", ctx.flightPrograms);
    } }, dependencies: [_angular_common__WEBPACK_IMPORTED_MODULE_3__.NgForOf], styles: ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJmbGlnaHRzLXBhZ2UuY29tcG9uZW50LnNjc3MifQ== */"] });


/***/ }),

/***/ 4312:
/*!********************************************************************!*\
  !*** ./src/app/state-management/actions/flight-program.actions.ts ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "addFlightProgram": () => (/* binding */ addFlightProgram),
/* harmony export */   "loadFlightPrograms": () => (/* binding */ loadFlightPrograms),
/* harmony export */   "loadFlightProgramsOnSuccess": () => (/* binding */ loadFlightProgramsOnSuccess)
/* harmony export */ });
/* harmony import */ var _ngrx_store__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @ngrx/store */ 3488);

const loadFlightPrograms = (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_0__.createAction)('[Flight Program] Load');
const loadFlightProgramsOnSuccess = (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_0__.createAction)('[Flight Program] Load Success', (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_0__.props)());
const addFlightProgram = (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_0__.createAction)('[Flight Program] Add', (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_0__.props)());


/***/ }),

/***/ 4619:
/*!***************************************************!*\
  !*** ./src/app/state-management/actions/index.ts ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "FlightProgramActions": () => (/* reexport module object */ _flight_program_actions__WEBPACK_IMPORTED_MODULE_0__)
/* harmony export */ });
/* harmony import */ var _flight_program_actions__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./flight-program.actions */ 4312);



/***/ }),

/***/ 6378:
/*!*******************************************************************!*\
  !*** ./src/app/state-management/effects/flight-program.effect.ts ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "FlightProgramEffect": () => (/* binding */ FlightProgramEffect)
/* harmony export */ });
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs */ 1353);
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! rxjs */ 635);
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! rxjs */ 3158);
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! rxjs */ 591);
/* harmony import */ var _actions__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../actions */ 4619);
/* harmony import */ var _ngrx_effects__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @ngrx/effects */ 5405);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/core */ 2560);
/* harmony import */ var _api_http_flight_program_flight_program_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../api-http/flight-program/flight-program.service */ 7723);






class FlightProgramEffect {
    constructor(actions$, flightProgramService) {
        this.actions$ = actions$;
        this.flightProgramService = flightProgramService;
        this.loadFlightPrograms$ = (0,_ngrx_effects__WEBPACK_IMPORTED_MODULE_2__.createEffect)(() => this.actions$.pipe((0,_ngrx_effects__WEBPACK_IMPORTED_MODULE_2__.ofType)(_actions__WEBPACK_IMPORTED_MODULE_0__.FlightProgramActions.loadFlightPrograms), (0,rxjs__WEBPACK_IMPORTED_MODULE_3__.mergeMap)(() => this.flightProgramService.getAll()
            .pipe((0,rxjs__WEBPACK_IMPORTED_MODULE_4__.map)(flightPrograms => _actions__WEBPACK_IMPORTED_MODULE_0__.FlightProgramActions.loadFlightProgramsOnSuccess({ flightPrograms })), (0,rxjs__WEBPACK_IMPORTED_MODULE_5__.catchError)(() => rxjs__WEBPACK_IMPORTED_MODULE_6__.EMPTY)))));
    }
}
FlightProgramEffect.ɵfac = function FlightProgramEffect_Factory(t) { return new (t || FlightProgramEffect)(_angular_core__WEBPACK_IMPORTED_MODULE_7__["ɵɵinject"](_ngrx_effects__WEBPACK_IMPORTED_MODULE_2__.Actions), _angular_core__WEBPACK_IMPORTED_MODULE_7__["ɵɵinject"](_api_http_flight_program_flight_program_service__WEBPACK_IMPORTED_MODULE_1__.FlightProgramService)); };
FlightProgramEffect.ɵprov = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_7__["ɵɵdefineInjectable"]({ token: FlightProgramEffect, factory: FlightProgramEffect.ɵfac });


/***/ }),

/***/ 6784:
/*!***************************************************!*\
  !*** ./src/app/state-management/effects/index.ts ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "effects": () => (/* binding */ effects)
/* harmony export */ });
/* harmony import */ var _flight_program_effect__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./flight-program.effect */ 6378);

const effects = [
    _flight_program_effect__WEBPACK_IMPORTED_MODULE_0__.FlightProgramEffect
];


/***/ }),

/***/ 465:
/*!*********************************************************************!*\
  !*** ./src/app/state-management/reducers/flight-program-reducer.ts ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "flightProgramEntityAdapter": () => (/* binding */ flightProgramEntityAdapter),
/* harmony export */   "flightProgramReducer": () => (/* binding */ flightProgramReducer),
/* harmony export */   "initialState": () => (/* binding */ initialState)
/* harmony export */ });
/* harmony import */ var _ngrx_entity__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @ngrx/entity */ 1904);
/* harmony import */ var _ngrx_store__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @ngrx/store */ 3488);
/* harmony import */ var _actions__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../actions */ 4619);



const selectId = (flightProgram) => flightProgram.id;
const flightProgramEntityAdapter = (0,_ngrx_entity__WEBPACK_IMPORTED_MODULE_1__.createEntityAdapter)({
    selectId
});
const initialState = flightProgramEntityAdapter.getInitialState({
    flightProgramSelected: undefined
});
const flightProgramReducer = (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_2__.createReducer)(initialState, (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_2__.on)(_actions__WEBPACK_IMPORTED_MODULE_0__.FlightProgramActions.loadFlightProgramsOnSuccess, (state, next) => {
    return flightProgramEntityAdapter.addMany(next.flightPrograms, state);
}));


/***/ }),

/***/ 1809:
/*!****************************************************!*\
  !*** ./src/app/state-management/reducers/index.ts ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "reducers": () => (/* binding */ reducers)
/* harmony export */ });
/* harmony import */ var _flight_program_reducer__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./flight-program-reducer */ 465);

const reducers = {
    flightProgramState: _flight_program_reducer__WEBPACK_IMPORTED_MODULE_0__.flightProgramReducer,
};


/***/ }),

/***/ 8982:
/*!***********************************************************************!*\
  !*** ./src/app/state-management/selectors/flight-program.selector.ts ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "flightProgramState": () => (/* binding */ flightProgramState),
/* harmony export */   "getFlightProgramSelected": () => (/* binding */ getFlightProgramSelected),
/* harmony export */   "getFlightPrograms": () => (/* binding */ getFlightPrograms)
/* harmony export */ });
/* harmony import */ var _ngrx_store__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @ngrx/store */ 3488);
/* harmony import */ var _reducers_flight_program_reducer__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../reducers/flight-program-reducer */ 465);


const flightProgramState = (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_1__.createFeatureSelector)('flightProgramState');
const { selectAll } = _reducers_flight_program_reducer__WEBPACK_IMPORTED_MODULE_0__.flightProgramEntityAdapter.getSelectors();
const getFlightPrograms = (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_1__.createSelector)(flightProgramState, selectAll);
const getFlightProgramSelected = () => (0,_ngrx_store__WEBPACK_IMPORTED_MODULE_1__.createSelector)(flightProgramState, (selectFlightProgramState) => {
    return selectFlightProgramState.flightProgramSelected;
});


/***/ }),

/***/ 8757:
/*!*****************************************************!*\
  !*** ./src/app/state-management/selectors/index.ts ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "flightProgramState": () => (/* reexport safe */ _flight_program_selector__WEBPACK_IMPORTED_MODULE_0__.flightProgramState),
/* harmony export */   "getFlightProgramSelected": () => (/* reexport safe */ _flight_program_selector__WEBPACK_IMPORTED_MODULE_0__.getFlightProgramSelected),
/* harmony export */   "getFlightPrograms": () => (/* reexport safe */ _flight_program_selector__WEBPACK_IMPORTED_MODULE_0__.getFlightPrograms)
/* harmony export */ });
/* harmony import */ var _flight_program_selector__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./flight-program.selector */ 8982);



/***/ }),

/***/ 5237:
/*!*************************************************************!*\
  !*** ./src/app/state-management/state-management.module.ts ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "StateManagementModule": () => (/* binding */ StateManagementModule)
/* harmony export */ });
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/common */ 4666);
/* harmony import */ var _ngrx_store__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @ngrx/store */ 3488);
/* harmony import */ var _ngrx_store_devtools__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @ngrx/store-devtools */ 5242);
/* harmony import */ var _reducers__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./reducers */ 1809);
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../environments/environment */ 2340);
/* harmony import */ var _ngrx_effects__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @ngrx/effects */ 5405);
/* harmony import */ var _effects__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./effects */ 6784);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/core */ 2560);











class StateManagementModule {
}
StateManagementModule.ɵfac = function StateManagementModule_Factory(t) { return new (t || StateManagementModule)(); };
StateManagementModule.ɵmod = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_3__["ɵɵdefineNgModule"]({ type: StateManagementModule });
StateManagementModule.ɵinj = /*@__PURE__*/ _angular_core__WEBPACK_IMPORTED_MODULE_3__["ɵɵdefineInjector"]({ imports: [_angular_common__WEBPACK_IMPORTED_MODULE_4__.CommonModule,
        _ngrx_store__WEBPACK_IMPORTED_MODULE_5__.StoreModule.forRoot(_reducers__WEBPACK_IMPORTED_MODULE_0__.reducers),
        _ngrx_store_devtools__WEBPACK_IMPORTED_MODULE_6__.StoreDevtoolsModule.instrument({
            maxAge: 25,
            logOnly: _environments_environment__WEBPACK_IMPORTED_MODULE_1__.environment.production
        }),
        _ngrx_effects__WEBPACK_IMPORTED_MODULE_7__.EffectsModule.forRoot(_effects__WEBPACK_IMPORTED_MODULE_2__.effects)] });
(function () { (typeof ngJitMode === "undefined" || ngJitMode) && _angular_core__WEBPACK_IMPORTED_MODULE_3__["ɵɵsetNgModuleScope"](StateManagementModule, { imports: [_angular_common__WEBPACK_IMPORTED_MODULE_4__.CommonModule, _ngrx_store__WEBPACK_IMPORTED_MODULE_5__.StoreRootModule, _ngrx_store_devtools__WEBPACK_IMPORTED_MODULE_6__.StoreDevtoolsModule, _ngrx_effects__WEBPACK_IMPORTED_MODULE_7__.EffectsRootModule] }); })();


/***/ }),

/***/ 2340:
/*!*****************************************!*\
  !*** ./src/environments/environment.ts ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "environment": () => (/* binding */ environment)
/* harmony export */ });
// This file can be replaced during build by using the `fileReplacements` array.
// `ng build` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.
const environment = {
    production: false
};
/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/plugins/zone-error';  // Included with Angular CLI.


/***/ }),

/***/ 4431:
/*!*********************!*\
  !*** ./src/main.ts ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/platform-browser */ 4497);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/core */ 2560);
/* harmony import */ var _app_app_module__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./app/app.module */ 6747);
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./environments/environment */ 2340);




if (_environments_environment__WEBPACK_IMPORTED_MODULE_1__.environment.production) {
    (0,_angular_core__WEBPACK_IMPORTED_MODULE_2__.enableProdMode)();
}
_angular_platform_browser__WEBPACK_IMPORTED_MODULE_3__.platformBrowser().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_0__.AppModule)
    .catch(err => console.error(err));


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendor"], () => (__webpack_exec__(1211), __webpack_exec__(4431)));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=main.js.map