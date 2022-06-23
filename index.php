<?php get_header(); ?>
<header id="event-description">
    <div id="disclaimer">
        <h2>Girolamo</h2>
        <p class="about-event">
            Um evento para revoluciona a sua criatividade
        </p>
        <p>Data do Evento</p>
        <p class="event-date">Sábado, 04 de Junho, a partir das 14:00 horas</p>
    </div>
    
<div id="subscription-form">
    <p>Preencha o formulário para receber os detalhes do evento</p>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Digite seu email" >
            </div>
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" name="telefone" placeholder="Digite seu whatsapp" >
            </div>
            <div class="form-group">
                <label for="phone">Principal Interesse</label>
                <select name="interest">
                <option value="" disabled selected> Selecione</option>
                <option value="apartamento"> Apartamento</option>
                <option value="apartamento"> Casa</option>
                <option value="apartamento"> Jardim</option>
                <option value="apartamento"> Outros</option>
                </select>
            </div>
    <input type="submit" class="btn" value="Quero me inscrever">
        </form>
    
    </div>    
</header>
<section id="key-benefits">
    <h2>O que você vai aprender:</h2>
    <div class="benefits">
      <div class="benefit">
        <div id="benefit-1" class="benefit-img"></div>
        <p>
          Alguma coisa muito legal, que vai fazer a diferença na vida do
          participante.
        </p>
      </div>
      <div class="benefit">
        <div id="benefit-2" class="benefit-img"></div>
        <p>
          Alguma coisa muito legal, que vai fazer a diferença na vida do
          participante.
        </p>
      </div>
      <div class="benefit">
        <div id="benefit-3" class="benefit-img"></div>
        <p>
          Alguma coisa muito legal, que vai fazer a diferença na vida do
          participante.
        </p>
      </div>
    </div>
  </section>

  <section id="location">
    <div id="address">
      <i class="bi bi-geo-alt-fill"></i>
      <div id="address-details">
        <p>Rua do evento, 1333</p>
        <p>Bairro</p>
        <p>Abertura: 14h</p>
      </div>
    </div>
    <div id="about-location">
      <h3>Local de destaque</h3>
      <p>
        O evento será realizado em um local prestigiado pelos amantes de
        Design de Interiores, onde teremos exemplos de vários ambientes, tanto
        internos como externos.
      </p>
    </div>
  </section>
  <section id="details">
    <div class="detail" id="detail-1">
      <img src="assets/img/hrz-1.jpg" alt="" />
      <div class="detail-description">
        <h3>Conheça os ambientes que você vai aprender a decorar</h3>
      </div>
    </div>
    <div class="detail" id="detail-2">
      <div class="detail-description">
        <h3>Detalhes</h3>
        <ul>
          <li>Posicionamento</li>
          <li>Aproveitamento de espaço</li>
          <li>Combinação de cores</li>
          <li>Organização</li>
          <li>E muito mais...</li>
        </ul>
      </div>
      <img src="assets/img/hrz-4.jpg" alt="" />
    </div>
    <div class="detail" id="detail-3">
      <img src="assets/img/hrz-5.jpg" alt="" />
      <div class="detail-description">
        <h3>Objetos</h3>
        <ul>
          <li>Cadeiras</li>
          <li>Mesas</li>
          <li>Espelhos</li>
          <li>Plantas</li>
          <li>Cortinas</li>
          <li>E muito mais...</li>
        </ul>
      </div>
    </div>
  </section>
  <section id="cta">
    <h3>Gostou? Então se inscreva:</h3>
    <button id="orc" class="btn">Solicitar Inscrição</button>
    <div id="myModal" class="modal">
        <!-- Conteúdo do Modal -->
 <div class="modal-content">
    <span class="close">&times;</span>
    <form action="#" method="POST">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="nome" placeholder="Digite seu nome" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Digite seu email" >
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="telefone" placeholder="Digite seu whatsapp" >
        </div>
<input type="submit" class="btn" value="Quero me inscrever">
    </form>
  </div>

</div>
  </section>
<?php get_footer(); ?>
