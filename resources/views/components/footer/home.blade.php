<footer>
    @if(Request::path() == '/')
        <div class="max-w-full">
            <p>Footer</p>
            <p>Footer</p>
        </div>
    @endif
    
    <x-footer.copyright/>
</footer>   
