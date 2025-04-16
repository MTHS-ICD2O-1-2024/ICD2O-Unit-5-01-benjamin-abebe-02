// Copyright (c) 2020 Mr. Coxall All rights reserved
//
// Created by: Benjamin Abebe
// Created on: Feb 2025
// This file contains the JS functions for index.html

const randomNumber = Math.floor(Math.random() * 6) + 1


function myButtonClicked() {
  "use strict";

  // input
  const userNumber = parseInt(document.getElementById('user-input').value)


  // process
  if (userNumber == randomNumber) {
    document.getElementById('answer').innerHTML = 
    '<p>You got the right number!</p>'
  }

  if (userNumber === randomNumber) {
    document.getElementById('answer').innerHTML =
    '<p>You got the right number!</p>'
  }

  if (userNumber != randomNumber) {
    document.getElementById('answer').innerHTML =
      '<p>You got the wrong number!' +
      '</br>The correct number was:- ' + randomNumber + '.</p>'
  }
}