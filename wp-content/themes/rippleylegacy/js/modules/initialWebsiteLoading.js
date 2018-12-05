import $ from 'jquery'

class InitialWebsiteLoading
{
    constructor()
    {
        this.websiteBody = document.querySelector('body');
        this.fullScreenLoader;

        this.eventsHandler();
    }

    eventsHandler() 
    {
        this.createFullScreenBackground();
        this.createWebsiteLoader();

        this.showFullScreenBackground();

        window.addEventListener('load', () => 
        {
            setTimeout(() => { this.removeFullScreenBackground() }, 2500);
        })
    }

    createFullScreenBackground()
    {
        let fullScreenLoader = document.createElement('div');
        fullScreenLoader.classList.add('full-screen-website-loader');

        this.fullScreenLoader = fullScreenLoader;	
    }

    createWebsiteLoader()
    {
        let loaderContainer = document.createElement('div');
        loaderContainer.classList.add('lds-ripple')

        //Append Two div to simulate animation properly
        for(let i = 0; i < 2; i++) 
        {
            loaderContainer.appendChild(document.createElement('div'))
        }

        this.fullScreenLoader.appendChild(loaderContainer)
    }

    showFullScreenBackground()
    {
        this.websiteBody.appendChild(this.fullScreenLoader);
        this.websiteBody.classList.add('overflow-hidden')
    }

    removeFullScreenBackground()
    {
        let loaderContainer = document.querySelector('.full-screen-website-loader');

        loaderContainer.parentNode.removeChild(loaderContainer);

        this.websiteBody.classList.remove('overflow-hidden')
    }
}

export default InitialWebsiteLoading;