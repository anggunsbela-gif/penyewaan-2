<div class="h-screen w-screen relative overflow-hidden flex items-center justify-center">

<!-- BACKGROUND -->
<div
class="absolute inset-0 bg-cover bg-center"
style="background-image:url('{{ asset('images/login-bg.jpg') }}')">
</div>

<div class="absolute inset-0 bg-[#12B8B4]/25 backdrop-blur-[2px]"></div>


<!-- CARD -->
<div
class="
relative
z-10
w-[480px]
bg-white
rounded-[28px]
overflow-hidden
shadow-[0_18px_50px_rgba(0,0,0,.18)
]">


<!-- LOGO -->
<div class="h-[115px] flex justify-center items-end">

<img
src="{{ asset('images/logo.jpeg') }}"
class="w-[125px] object-contain">

</div>


<div class="h-[3px] bg-[#12B8B4]"></div>



<!-- CONTENT -->
<div class="px-[28px] pt-[18px] pb-[24px] relative">


<!-- TITLE -->
<div class="relative mb-6">

<h1
class="
text-center
text-[32px]
font-black
text-[#222]">

Login

</h1>


<button
type="button"

class="
absolute
right-0
top-1/2
-translate-y-1/2
border
border-[#12B8B4]
rounded-xl
px-3
h-[34px]
text-[#12B8B4]
font-semibold
text-[12px]
flex
items-center">

<i class="fa-solid fa-headset mr-1"></i>

Bantuan

</button>

</div>




<form class="space-y-3">


<!-- USER -->
<div>

<label class="block mb-1 font-bold text-[14px]">

Username

</label>

<div
class="
h-[46px]
rounded-xl
bg-[#F6F7F9]
border
px-4
flex
items-center">

<i
class="
fa-solid
fa-user
text-[#12B8B4]
mr-3">

</i>

<input
type="text"

placeholder="Input your username"

class="
w-full
bg-transparent
outline-none
text-[15px]">

</div>

</div>





<!-- PASSWORD -->
<div>

<label class="block mb-1 font-bold text-[14px]">

Password

</label>

<div
class="
h-[46px]
rounded-xl
bg-[#F6F7F9]
border
px-4
flex
items-center">

<i
class="
fa-solid
fa-lock
text-[#12B8B4]
mr-3">

</i>

<input
type="password"

placeholder="Input your password"

class="
w-full
bg-transparent
outline-none
text-[15px]">


<i
class="
fa-regular
fa-eye">

</i>

</div>

</div>





<!-- ROLE -->
<div>

<label class="block mb-1 font-bold text-[14px]">

Login Sebagai

</label>

<div
class="
h-[46px]
rounded-xl
bg-[#F6F7F9]
border
px-4
flex
items-center">

<i
class="
fa-solid
fa-shield-halved
text-[#12B8B4]
mr-3">

</i>

<select
class="
w-full
bg-transparent
outline-none
text-[15px]">

<option>Pilih role</option>

<option>User</option>

<option>Admin</option>

</select>

</div>

</div>





<div class="pt-2">

<button
type="button"

onclick="window.location.href='/'"

class="
w-full
h-[48px]
rounded-xl
bg-gradient-to-r
from-[#089C99]
to-[#18D1CC]
text-white
font-black
text-[20px]
shadow-lg">

<i
class="
fa-solid
fa-right-to-bracket
mr-2">

</i>

Login

</button>

</div>





<p
class="
text-center
text-[14px]">

Belum punya Akun?

<a
href="/?menu=register"

class="
text-[#12B8B4]
font-black
underline">

Daftar Sekarang.

</a>

</p>

</form>

</div>

</div>

</div>