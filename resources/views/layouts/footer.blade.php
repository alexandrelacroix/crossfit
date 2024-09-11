<footer class="overflow-hidden w-full pt-6 into_scroll relative z-20" data-scroll="contact">
    <div class="relative bg-creme text-burgundy border_radius_box border_footer">
        <x-app.container class="py-10 lg:py-20 items-center flex-none lg:flex flex-row-reverse">
            <div class="w-full lg:w-2/3 lg:px-20">
                <form action="" class="">
                    <x-app.h2 class="mb-6">Contacte-nous !</x-app.h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                        <div class="col-span-2 md:col-span-1">
                            <x-app.label for="lname" >Nom</x-app.label>
                            <x-app.input type="text" id="lname" name="lname" placeholder="..."></x-app.input>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <x-app.label for="fname" >Prénom</x-app.label>
                            <x-app.input type="text" id="fname" name="fname" placeholder="..."></x-app.input>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <x-app.label for="mail" >Email</x-app.label>
                            <x-app.input type="text" id="mail" name="mail" placeholder="..."></x-app.input>
                        </div>
                        <div class="col-span-2 md:col-span-3">
                            <x-app.label for="message" >Message</x-app.label>
                            <x-app.textarea type="text" rows="2" id="message" name="message" placeholder="..."></x-app.textarea>
                        </div>
                        <div class="col-span-2 md:col-span-3 flex items-center w-full">
                            <x-app.checkbox name="gdpr_optin" id="gdpr_optin"/>
                            <x-app.labelcheckbox for="gdpr_optin">J’accèpte que mes données soient utilisées dans le cadre de la demande
                            de contact</x-app.labelcheckbox>
                        </div>
                        <div class="col-span-2 md:col-span-3 flex items-center w-full">
                            <x-app.checkbox name="newsletter" id="newsletter"/>
                            <x-app.labelcheckbox for="newsletter">Je m’inscris à la newsletter</x-app.labelcheckbox>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex items-center w-full">
                            <x-app.button type="submit" class="!mx-0">Envoyer</x-app.button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="w-full lg:w-1/3 mt-16 lg:mt-0 px-4 md:px-10 text-center">
                <img src="{{ Storage::url('images/logo-footer.svg') }}" alt="" class="inline-block w-40 lg:w-80">
                <div class="text-center">
                    <x-app.paragraph>Chaussée de Louvain 473, 1300 Wavre<br/><a href="mailto:info@crossfitheritage.be" class="underline">info@crossfitheritage.be</a><br/><a href="tel:0475686514" class="underline">0475686514</a></x-app.paragraph>
                    <div class="flex justify-center">
                        <a href="https://www.facebook.com/profile.php?id=61560440357253" target="_blank" class="block w-10 h-10 px-2"><img src="{{ Storage::url('images/fb.svg') }}" alt="" class="inline-block w-full"></a>
                        <a href="https://www.instagram.com/crossfit.heritage" target="_blank" class="block w-10 h-10 px-2"><img src="{{ Storage::url('images/insta.svg') }}" alt="" class="inline-block w-full"></a>
                        <a href="mailto:info@crossfitheritage.be" class="block w-10 h-10 px-2"><img src="{{ Storage::url('images/mail.svg') }}" alt="" class="inline-block w-full"></a>
                        <a href="tel:0475686514" class="block w-10 h-10 px-2"><img src="{{ Storage::url('images/phone.svg') }}" alt="" class="inline-block w-full"></a>
                    </div>
                </div>
            </div>
        </x-app.container>
    </div>
</footer>