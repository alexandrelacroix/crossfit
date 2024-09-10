<footer class="overflow-hidden w-full pt-6">
    <div class="relative bg-creme text-burgundy border_radius_box border_footer">
        <x-app.container class="grid grid-cols-3 gap-8 py-20 content-center">
            <div class="inline-block col-span-1 px-10 text-center">
                <img src="{{ Storage::url('images/logo-footer.svg') }}" alt="" class="inline-block w-80">
                <div class="text-center">
                    <x-app.paragraph>Chaussée de Louvain 473, 1300 Wavre<br/><a href="mailto:info@crossfitheritage.be" class="underline">info@crossfitheritage.be</a><br/><a href="tel:0475686514" class="underline">0475686514</a></x-app.paragraph>
                    <div class="flex justify-center">
                        <a href="#" class="block w-10 h-10 bg-blue">A</a>
                        <a href="#" class="block w-10 h-10 bg-blue">A</a>
                        <a href="#" class="block w-10 h-10 bg-blue">A</a>
                        <a href="#" class="block w-10 h-10 bg-blue">A</a>
                    </div>
                </div>
            </div>

            <div class="col-span-2 px-20">
                <form action="" class="">
                    <x-app.h2 class="mb-6">Contacte-nous !</x-app.h2>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-1">
                            <x-app.label for="lname" >Nom</x-app.label>
                            <x-app.input type="text" id="lname" name="lname" placeholder="..."></x-app.input>
                        </div>
                        <div class="col-span-1">
                            <x-app.label for="fname" >Prénom</x-app.label>
                            <x-app.input type="text" id="fname" name="fname" placeholder="..."></x-app.input>
                        </div>
                        <div class="col-span-1">
                            <x-app.label for="mail" >Email</x-app.label>
                            <x-app.input type="text" id="mail" name="mail" placeholder="..."></x-app.input>
                        </div>
                        <div class="col-span-3">
                            <x-app.label for="message" >Message</x-app.label>
                            <x-app.textarea type="text" rows="2" id="message" name="message" placeholder="..."></x-app.textarea>
                        </div>
                        <div class="col-span-3 flex items-center w-full flex-wrap">
                            <x-app.checkbox name="gdpr_optin" id="gdpr_optin"/>
                            <x-app.labelcheckbox for="gdpr_optin" class="flex-none">J’accèpte que mes données soient utilisées dans le cadre de la demande
                            de contact</x-app.labelcheckbox>
                        </div>
                        <div class="col-span-3 flex items-center w-full flex-wrap">
                            <x-app.checkbox name="newsletter" id="newsletter"/>
                            <x-app.labelcheckbox for="newsletter" class="flex-none">Je m’inscris à la newsletter</x-app.labelcheckbox>
                        </div>
                        <x-app.button type="submit" class="!mx-0">Envoyer</x-app.button>
                    </div>
                </form>
            </div>
        </x-app.container>
    </div>
</footer>