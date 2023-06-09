"use strict";

// initializing a new calendar object, that will use an html container to create itself
var calendar = new Calendar(
  "calendarContainer", // id of html container for calendar
  "small", // size of calendar, can be small | medium | large
  [
    "Wednesday", // left most day of calendar labels
    3 // maximum length of the calendar labels
  ],
  [
    "#606c88", // primary color
    "#606c88", // primary dark color
    "#FFFFFF", // text color
    "#FFFFFF" // text dark color
  ]
);

// initializing a new organizer object, that will use an html container to create itself
var organizer = new Organizer(
  "organizerContainer", // id of html container for calendar
  calendar, // defining the calendar that the organizer is related to
  data // giving the organizer the static data that should be displayed
);

function createData() {
  var date = new Date();
  var data = {};

  for (var i = 0; i < 10; i++) {
    data[date.getFullYear() + i] = {};

    for (var j = 0; j < 12; j++) {
      data[date.getFullYear() + i][j + 1] = {};

      for (var k = 0; k < Math.ceil(Math.random() * 10); k++) {
        var l = Math.ceil(Math.random() * 28);

        try {
          data[date.getFullYear() + i][j + 1][l].push({
            startTime: "10:00",
            endTime: "12:00",
            text: "Some Event Here"
          });
        } catch (e) {
          data[date.getFullYear() + i][j + 1][l] = [];
          data[date.getFullYear() + i][j + 1][l].push({
            startTime: "10:00",
            endTime: "12:00",
            text: "Some Event Here"
          });
        }
      }
    }
  }

  return data;
}

var data = createData();

