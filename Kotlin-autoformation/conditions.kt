package com.example.kotlinauto

fun main () {
    condition()
}

fun condition() {
    // declarations.
    val students = 15;
    val age = 17;

    // accepts between Monday and Friday.
    val day = 5;

    // condition
    if (students > 20)  {
        println("$students class is full.")
    } else {
        println("Class is not full")
    }

    // another condition
    if (age in 18..100) {
        println("the student is an adult.")
    } else {
        println("student is not an adult")
    }

   // when operator
    when(day) {
        1 -> println("$day. Monday")
        5 -> println("$day. Friday")
        in 1..5 -> println("not a week-end")
        else -> println("invalid day")
    }




}