window.addEventListener('load', async () => { 
    if (navigator.serviceWorker) { 
        try { 
            const reg = await navigator.serviceWorker.register('sw.js'); 
            console.log('Сервисный рабочий успешно зарегистрирован', reg); 
        } catch (e) { 
            console.error('Ошибка регистрации сервисного рабочего:', e); 
        } 
    } 

    try { 
        const response = await fetch('http://example.com/data'); 
        if (!response.ok) { 
            throw new Error('Сетевая ошибка: ' + response.status); 
        } 

        const data = await response.json(); 
        console.log('Данные успешно загружены:', data); 
        document.getElementById('dataContainer').innerText = JSON.stringify(data); 
     
    } catch (error) { 
        console.error('Произошла ошибка:', error); 
        alert('Не удалось загрузить данные. Пожалуйста, попробуйте позже.'); 
    } 
});
