"use strict";

function _instanceof(left, right) { if (right != null && typeof Symbol !== "undefined" && right[Symbol.hasInstance]) { return !!right[Symbol.hasInstance](left); } else { return left instanceof right; } }

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!_instanceof(instance, Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

/*
  Inspired by: "Framer Android Picker"
  By: John Sherwin
  Link: https://dribbble.com/shots/4467822-Framer-Android-Picker
*/
var _React = React,
    Component = _React.Component,
    Fragment = _React.Fragment;
    var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var YEARS = new Array(201).fill(1900).map(function (value, index) {
  return value + index;
});

var _React = React,
    Component = _React.Component,
    Fragment = _React.Fragment;
    var WEEKS = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
    var WEEKS = new Array(201).fill(1900).map(function (value, index) {
  return value + index;
});

var CustomWheel = /*#__PURE__*/function (_Component) {
  _inherits(CustomWheel, _Component);

  function CustomWheel(_ref) {
    var _this;

    var selected = _ref.selected;

    _classCallCheck(this, CustomWheel);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(CustomWheel).call(this));

    _defineProperty(_assertThisInitialized(_this), "onMouseDown", function (event) {
      _this.previousY = event.touches ? event.touches[0].clientY : event.clientY;
      _this.dragging = true;
      document.addEventListener('mousemove', _this.onMouseMove);
      document.addEventListener('mouseup', _this.onMouseUp);
      document.addEventListener('touchmove', _this.onMouseMove);
      document.addEventListener('touchend', _this.onMouseUp);
    });

    _defineProperty(_assertThisInitialized(_this), "onMouseMove", function (event) {
      var clientY = event.touches ? event.touches[0].clientY : event.clientY;
      _this.offset = clientY - _this.previousY;
      var maxPosition = -_this.props.data.length * 50;
      var position = _this.state.position + _this.offset;

      _this.setState({
        position: Math.max(maxPosition, Math.min(50, position))
      });

      _this.previousY = event.touches ? event.touches[0].clientY : event.clientY;
    });

    _defineProperty(_assertThisInitialized(_this), "onMouseUp", function () {
      // calculate closeset snap
      var maxPosition = -(_this.props.data.length - 1) * 50;
      var rounderPosition = Math.round((_this.state.position + _this.offset * 5) / 50) * 50;
      var finalPosition = Math.max(maxPosition, Math.min(0, rounderPosition));
      _this.dragging = false;

      _this.setState({
        position: finalPosition
      });

      document.removeEventListener('mousemove', _this.onMouseMove);
      document.removeEventListener('mouseup', _this.onMouseUp);
      document.removeEventListener('touchmove', _this.onMouseMove);
      document.removeEventListener('touchend', _this.onMouseUp);

      _this.props.onDateChange(_this.props.type, -finalPosition / 50);
    });

    _this.state = {
      position: selected ? -(selected - 1) * 50 : 0
    };
    _this.offset = 0;
    _this.dragging = false;
    return _this;
  }

  _createClass(CustomWheel, [{
    key: "componentDidUpdate",
    value: function componentDidUpdate() {
      var selectedPosition = -(this.props.selected - 1) * 50;

      if (!this.dragging && this.state.position !== selectedPosition) {
        this.setState({
          position: selectedPosition
        });
      }
    }
  }, {
    key: "render",
    value: function render() {
      var inlineStyle = {
        willChange: 'transform',
        transition: "transform ".concat(Math.abs(this.offset) / 100 + 0.1, "s"),
        transform: "translateY(".concat(this.state.position, "px)")
      };
      return React.createElement("div", {
        className: "dragdealer year",
        onMouseDown: this.onMouseDown,
        onTouchStart: this.onMouseDown
      }, React.createElement("ul", {
        className: "handle",
        style: inlineStyle
      }, this.props.data.map(function (year) {
        return React.createElement("li", {
          key: year
        }, year);
      })));
    }
  }]);

  return CustomWheel;
}(Component);

var DatePicker = /*#__PURE__*/function (_Component2) {
  _inherits(DatePicker, _Component2);

  function DatePicker() {
    var _getPrototypeOf2;

    var _this2;

    _classCallCheck(this, DatePicker);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this2 = _possibleConstructorReturn(this, (_getPrototypeOf2 = _getPrototypeOf(DatePicker)).call.apply(_getPrototypeOf2, [this].concat(args)));

    _defineProperty(_assertThisInitialized(_this2), "dateChanged", function (type, changedData) {
      var newDate;

      if (type === 'day') {
        newDate = new Date(_this2.props.date.getFullYear(), _this2.props.date.getMonth(), changedData + 1);
      } else if (type === 'month') {
        var maxDayInSelectedMonth = new Date(_this2.props.date.getFullYear(), changedData + 1, 0).getDate();
        var day = Math.min(_this2.props.date.getDate(), maxDayInSelectedMonth);
        newDate = new Date(_this2.props.date.getFullYear(), changedData, day);
      } else if (type === 'year') {
        var _maxDayInSelectedMonth = new Date(1900 + changedData, _this2.props.date.getMonth() + 1, 0).getDate();

        var _day = Math.min(_this2.props.date.getDate(), _maxDayInSelectedMonth);

        newDate = new Date(1900 + changedData, _this2.props.date.getMonth(), _day);
      }

      _this2.props.onDateChange(newDate);
    });

    return _this2;
  }

  _createClass(DatePicker, [{
    key: "render",
    value: function render() {
      this.days = new Array(new Date(this.props.date.getFullYear(), this.props.date.getMonth() + 1, 0).getDate()).fill(1).map(function (value, index) {
        return value + index;
      });
      this.months = MONTHS;
      this.years = YEARS;
      return React.createElement("div", {
        className: "date-picker"
      }, React.createElement(CustomWheel, {
        type: "month",
        data: this.months,
        selected: this.props.date.getMonth() + 1,
        onDateChange: this.dateChanged
      }), React.createElement(CustomWheel, {
        type: "day",
        data: this.days,
        selected: this.props.date.getDate(),
        onDateChange: this.dateChanged
      }), React.createElement(CustomWheel, {
        type: "year",
        data: this.years,
        selected: this.props.date.getYear() + 1,
        onDateChange: this.dateChanged
      }));
    }
  }]);

  return DatePicker;
}(Component);

var App = /*#__PURE__*/function (_Component3) {
  _inherits(App, _Component3);

  function App() {
    var _getPrototypeOf3;

    var _this3;

    _classCallCheck(this, App);

    for (var _len2 = arguments.length, args = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
      args[_key2] = arguments[_key2];
    }

    _this3 = _possibleConstructorReturn(this, (_getPrototypeOf3 = _getPrototypeOf(App)).call.apply(_getPrototypeOf3, [this].concat(args)));

    _defineProperty(_assertThisInitialized(_this3), "state", {
      date: new Date()
    });

    _defineProperty(_assertThisInitialized(_this3), "resetDate", function () {
      _this3.setState({
        date: new Date()
      });
    });

    _defineProperty(_assertThisInitialized(_this3), "dateChanged", function (newDate) {
      _this3.setState({
        date: newDate
      });
    });

    return _this3;
  }

  _createClass(App, [{
    key: "render",
    value: function render() {
      return React.createElement(Fragment, null, React.createElement("div", {
        className: "date"
      }, this.state.date.getDate(), " ", MONTHS[this.state.date.getMonth()], " ", this.state.date.getFullYear()), React.createElement(DatePicker, {
        date: this.state.date,
        onDateChange: this.dateChanged
      }), React.createElement("button", {
        className: "reset",
        onClick: this.resetDate
      }, "Reset Date"));
    }
  }]);

  return App;
}(Component);

ReactDOM.render(React.createElement(App, null), document.querySelector('#app'));