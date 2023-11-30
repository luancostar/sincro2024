// analise de clientes

$(document).ready(function() {
    $("#analise_clientes").click(function(e) {
        e.preventDefault(); // Evita a ação padrão de seguir o link

        $.ajax({
            url: '../components/analise_clientes.php',
            type: 'GET',
            success: function(data) {
                $("#divAlvo").html(data);
            },
            error: function() {
                alert('Erro ao carregar a Análise de Clientes');
            }
        });
    });
});

// histórico de clientes

$(document).ready(function() {
    $("#historico_clientes").click(function(e) {
        e.preventDefault(); // Evita a ação padrão de seguir o link

        $.ajax({
            url: '../components/historico_clientes.php',
            type: 'GET',
            success: function(data) {
                $("#divAlvo").html(data);
            },
            error: function() {
                alert('Erro ao carregar o Histórico de clientes');
            }
        });
    });
});

// Análise de vendedores

$(document).ready(function() {
    $("#analise_vendedores").click(function(e) {
        e.preventDefault(); // Evita a ação padrão de seguir o link

        $.ajax({
            url: '../components/analise_vendedores.php',
            type: 'GET',
            success: function(data) {
                $("#divAlvo").html(data);
            },
            error: function() {
                alert('Erro ao carregar a Análise de Vendedores');
            }
        });
    });
});

// Receitas

$(document).ready(function() {
    $("#receitas").click(function(e) {
        e.preventDefault(); // Evita a ação padrão de seguir o link

        $.ajax({
            url: '../components/receitas.php',
            type: 'GET',
            success: function(data) {
                $("#divAlvo").html(data);
            },
            error: function() {
                alert('Erro ao carregar a Análise de Vendedores');
            }
        });
    });
});

// Despesas

$(document).ready(function() {
    $("#despesas").click(function(e) {
        e.preventDefault(); // Evita a ação padrão de seguir o link

        $.ajax({
            url: '../components/despesas.php',
            type: 'GET',
            success: function(data) {
                $("#divAlvo").html(data);
            },
            error: function() {
                alert('Erro ao carregar a Análise de Vendedores');
            }
        });
    });
});