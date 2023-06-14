
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Müşteri Bilgilerini Güncelle</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('update',['id'=>$value->id]) }}" method="put">
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Müşteri Adı:</label>
              <input name="musteri" type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-1">
              <label for="message-text" class="col-form-label">Vade Sayısı:</label>
              <input name="vade_sayisi" class="form-control" id="message-text">
            </div>
            <div class="mb-1">
                <label for="message-text" class="col-form-label">Ödenen Vadeler:</label>
                <input name="odenen_vadeler" class="form-control" id="message-text">
              </div>
              <div class="mb-1">
                <label for="message-text" class="col-form-label">Kalan Vadeler:</label>
                <input name="kalan_vadeler" class="form-control" id="message-text">
              </div>
              <div class="mb-3">
                <label for="validationCustom04" class="form-label">Filitreleme</label>
                <select name="filitreleme" class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Senet Türü</option>
                  <option value="Açık Senet">Açık Senet</option>
                  <option value="Kapalı Senet">Kapalı Senet</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
              <button type="submit" class="btn btn-primary">Güncelle</button>
              </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>