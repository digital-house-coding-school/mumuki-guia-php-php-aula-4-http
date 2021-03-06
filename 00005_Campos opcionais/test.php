public function testNome(): void {
  $_POST = [
    "email" => "thomaz@digitalhouse.com",
    "usuario" => "thomazstaziak"
  ];

  $resultado = $this->bemVindo();
  $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
  $this->assertTrue(strtolower($resultado) == "bem-vindo thomazstaziak. foi registrado com o e-mail thomaz@digitalhouse.com", "O resultado está incorreto. Era esperado 'Bem-vindo thomazstaziak. Foi registrado com o e-mail thomaz@digitalhouse.com' e foi obtido '$resultado'");
}

  public function testNome1(): void {
    $_POST = [
      "email" => "victor@digitalhouse.com",
    ];

    $resultado = $this->bemVindo();
    $this->assertTrue(is_string($resultado), "Sua função não está retornando uma string...");
    $this->assertTrue(strtolower($resultado) == "e-mail de boas vindas", "O resultado está incorreto. Era esperado 'e-mail de boas vindas' e foi obtido '$resultado'");
  }

  public /*...content...*/