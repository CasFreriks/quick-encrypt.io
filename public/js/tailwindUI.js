/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/tailwindUI.js ***!
  \************************************/
var _window$Components;

window.Components = (_window$Components = window.Components) !== null && _window$Components !== void 0 ? _window$Components : {};

window.Components['popover'] = function anonymous() {
  return function () {
    var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
        _ref$open = _ref.open,
        e = _ref$open === void 0 ? !1 : _ref$open,
        _ref$focus = _ref.focus,
        t = _ref$focus === void 0 ? !1 : _ref$focus;

    var i = ["[contentEditable=true]", "[tabindex]", "a[href]", "area[href]", "button:not([disabled])", "iframe", "input:not([disabled])", "select:not([disabled])", "textarea:not([disabled])"].map(function (e) {
      return "".concat(e, ":not([tabindex='-1'])");
    }).join(",");
    return {
      __type: "popover",
      open: e,
      init: function init() {
        var _this = this;

        t && this.$watch("open", function (e) {
          e && _this.$nextTick(function () {
            !function (e) {
              var t = Array.from(e.querySelectorAll(i));
              !function e(i) {
                void 0 !== i && (i.focus({
                  preventScroll: !0
                }), document.activeElement !== i && e(t[t.indexOf(i) + 1]));
              }(t[0]);
            }(_this.$refs.panel);
          });
        });

        var e = function e(i) {
          if (!document.body.contains(_this.$el)) return void window.removeEventListener("focus", e, !0);
          var n = t ? _this.$refs.panel : _this.$el;

          if (_this.open && i.target instanceof Element && !n.contains(i.target)) {
            var _e = _this.$el;

            for (; _e.parentNode;) {
              if (_e = _e.parentNode, _e.__x instanceof _this.constructor) {
                if ("popoverGroup" === _e.__x.$data.__type) return;
                if ("popover" === _e.__x.$data.__type) break;
              }
            }

            _this.open = !1;
          }
        };

        window.addEventListener("focus", e, !0);
      },
      onEscape: function onEscape() {
        this.open = !1, this.restoreEl && this.restoreEl.focus();
      },
      onClosePopoverGroup: function onClosePopoverGroup(e) {
        e.detail.contains(this.$el) && (this.open = !1);
      },
      toggle: function toggle(e) {
        this.open = !this.open, this.open ? this.restoreEl = e.currentTarget : this.restoreEl && this.restoreEl.focus();
      }
    };
  };
}();
/******/ })()
;