package com.example.kotlinauto

fun main(){
    listdemo()

}

fun listdemo()  {

 val names = listOf("adnane","hicham","boutaina")
    println(names)

 var nicknames = mutableListOf("tebbaa", "mliki", "lharrak")
 println("initial data : $nicknames")
 nicknames.remove("laharrak")
    println("after data $nicknames")

  var group = arrayListOf("codecampers", "cybergangs","cafeineoverflow")
    println(group)

}