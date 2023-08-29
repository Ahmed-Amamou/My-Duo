
<div class="flex" x-data="picturePreview()">
    <div class="rounded-md bg-white mr-2">

        <img id="preview" src="" alt="" class="w-24 h-24 pr-2 rounded-md object-cover">
    </div>
    <div>
        <x-primary-button @click="document.getElementById('picture').click()"  class="relative">
            <div class="flex items-center ">
            <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
            </svg>
             Upload Picture
            </div>
            <input @change="showPreview(event)" type="file" name="picture" id="picture" class="absolute inset-0 -z-10 opacity-0">
        </x-primary-button>
    </div>
    <script>
        function picturePreview(){
            return {
                showPreview: (event) => {
                    if(event.target.files.length > 0){
                        var src = URL.createObjectURL(event.target.files[0]);
                        document.getElementById('preview').src=src;
                    }
                }
            }
        }
    </script>
</div>
