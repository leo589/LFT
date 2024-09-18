function loadContent(pageUrl) {
    $('.menu li').removeClass('active');
    $('a[onclick="loadContent(\'' + pageUrl + '\');"]').parent().addClass('active');
    $.ajax({
        url: pageUrl,
        type: 'GET',
        success: function(response) {
            $('#content').html(response);
        },
        error: function(xhr, status, error) {
            console.error('Erro ao carregar o conteúdo:', status, error);
            $('#content').html('<p>Ocorreu um erro ao carregar o conteúdo.</p>');
        }
    });
}



// Função para aplicar o modo escuro
function applyDarkMode(isDarkMode) {
    if (isDarkMode) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }
}

// Função para alternar o modo escuro
function toggleDarkMode() {
    // Verificar o estado atual
    const isCurrentlyDarkMode = document.body.classList.contains('dark-mode');
    const newDarkMode = !isCurrentlyDarkMode;
    
    // Aplicar o novo estado
    applyDarkMode(newDarkMode);
    
    // Armazenar a preferência no localStorage
    localStorage.setItem('dark-mode', newDarkMode);
}

// Função para carregar o estado inicial
function loadInitialMode() {
    const isDarkMode = localStorage.getItem('dark-mode') === 'true';
    applyDarkMode(isDarkMode);
}

// Chamar a função de carregamento inicial quando o documento estiver pronto
document.addEventListener('DOMContentLoaded', loadInitialMode);
