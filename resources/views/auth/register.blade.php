<div class="h-screen w-screen relative overflow-hidden flex items-center justify-center">

<div
class="absolute inset-0 bg-cover bg-center"
style="background-image:url('{{ asset('images/login-bg.jpg') }}')">
</div>

<div class="absolute inset-0 bg-[#12B8B4]/25 backdrop-blur-[2px]"></div>

<div class="relative z-10 w-[480px] bg-white rounded-[28px] overflow-hidden shadow-[0_18px_50px_rgba(0,0,0,.18)]">

<!-- LOGO -->
<div class="h-[115px] flex justify-center items-end">
<img src="{{ asset('images/logo.jpeg') }}" class="w-[125px] object-contain">
</div>

<div class="h-[3px] bg-[#12B8B4]"></div>

<!-- CONTENT -->
<div class="px-[28px] pt-[18px] pb-[20px] relative">

<div class="relative mb-6">

<h1
class="
text-center
text-[32px]
font-black
text-[#222]">

Register

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

<div>
<label class="block mb-1 font-bold text-[14px]">Username</label>
<div class="h-[46px] rounded-xl bg-[#F6F7F9] border px-4 flex items-center">
<i class="fa-solid fa-user text-[#12B8B4] mr-3"></i>
<input type="text" placeholder="Input your username" class="w-full bg-transparent outline-none text-[15px]">
</div>
</div>

<div>
<label class="block mb-1 font-bold text-[14px]">Input NIK</label>
<div class="h-[46px] rounded-xl bg-[#F6F7F9] border px-4 flex items-center">
<i class="fa-solid fa-id-card text-[#12B8B4] mr-3"></i>
<input type="text" placeholder="Input your NIK" class="w-full bg-transparent outline-none text-[15px]">
</div>
</div>

<div>
<label class="block mb-1 font-bold text-[14px]">Address</label>
<div class="h-[46px] rounded-xl bg-[#F6F7F9] border px-4 flex items-center">
<i class="fa-solid fa-location-dot text-[#12B8B4] mr-3"></i>
<input type="text" placeholder="Input your address" class="w-full bg-transparent outline-none text-[15px]">
</div>
</div>

<div>
<label class="block mb-1 font-bold text-[14px]">Create Password</label>
<div class="h-[46px] rounded-xl bg-[#F6F7F9] border px-4 flex items-center">
<i class="fa-solid fa-lock text-[#12B8B4] mr-3"></i>
<input type="password" placeholder="Create password" class="w-full bg-transparent outline-none text-[15px]">
<i class="fa-regular fa-eye"></i>
</div>
</div>

<div>
<label class="block mb-1 font-bold text-[14px]">Confirm Password</label>
<div class="h-[46px] rounded-xl bg-[#F6F7F9] border px-4 flex items-center">
<i class="fa-solid fa-lock text-[#12B8B4] mr-3"></i>
<input type="password" placeholder="Confirm password" class="w-full bg-transparent outline-none text-[15px]">
<i class="fa-regular fa-eye"></i>
</div>
</div>

<div class="pt-2">
<button type="submit" class="w-full h-[48px] rounded-xl bg-gradient-to-r from-[#089C99] to-[#18D1CC] text-white font-black text-[20px] shadow-lg">
Next
<i class="fa-solid fa-circle-arrow-right ml-2"></i>
</button>
</div>

<p class="text-center text-[14px]">
Sudah punya Akun?
<a href="/?menu=login" class="text-[#12B8B4] font-black underline">
Login di sini.
</a>
</p>

</form>

</div>

</div>

</div>