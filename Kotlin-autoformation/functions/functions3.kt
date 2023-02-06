// default value.

fun main() {
 demo() // normal function call with default parameter.
 demotwo("100km/h") // specified parameter.
 //demothree() // compact functions.
}
fun demo(name: String = "adnane") {
 println(name)
}

fun demotwo(speed: String = "90 km/h") {
 println(speed)
}