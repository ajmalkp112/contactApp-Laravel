<x-layout>
  <div class="add-contact-container">
    <form action="{{route('contacts.importxml')}}" method='post' class="add-contact-form" enctype="multipart/form-data">
      @csrf

      <h2>Import XML</h2>
      <input type='file' name='xml_file' placeholder='Upload XML' accept=".xml" required><br>

      <div class='form-buttons'>
        <a href="{{route('contacts.index')}}" class='contact-cancel-btn btn'>Cancel</a>
        <button type='submit' class="contact-add-btn btn">Add</button> 
      </div>
    
    </form>
  </div>
</x-layout>