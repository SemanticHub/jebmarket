<?php
/* @var $this DefaultController */
$this->pageHeader = "Blog";
?>
<div class="row" id="dashboard">
    <div class="col-sm-6 col-md-3">
        <a href="<?php echo $this->createUrl('/blog/blogPost/admin'); ?>" class="thumbnail">
            <p class="caption" style="text-align: center;">Manage Posts</p>
            <img class="img-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAC0CAYAAADraNxXAAAFeUlEQVR4Xu3YvUscURiF8buFgtoq2oqtNoIo/vtWKoidWIudrJ0gfiTcCXczTHZmN+menMcqupnsed/z82Z2ZvP5/Efxyw0ANjATK6AlI3YbEKsQMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA2IFVOVQcWqAcwGxIqpyqBi1QBmA2LFVGVQsWoAswGxYqoyqFg1gNmAWDFVGVSsGsBsQKyYqgwqVg1gNiBWTFUGFasGMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA1EY/3+/i7X19fl7e2tXF5elq2trfLw8FCen5//KHB/f7+cnJx0P1923TqNj1339PRUHh8fF//E8fFxOTg46L6fz+fl/v6+e8/61X9tnff8n/5OLNbPz89ydXVVvr6+ymw2W2Dtl7sM1zrXLQMydl37+fb2djk/Py93d3fl9fW1y7OxsdFl7L9Wf7Hq36uvpX1FYu3DqYWPYW2n7OHhYTk6OipT17UTcGdnp8PUrq0n4e7u7uIXY/h+7bq9vb3u5O5f9/Hx0Z247f3bCZx6usZivb29Laenp91J1r8NaKdVg1lPsHaS1Z9NXddOxYuLi3Jzc7M4EaeumzpZX15elmJteD1ZgzYwde85PFVX3R7U11fdIoy939h1wwztZBVrENI26hieVR+gpl6vp2v9r73/gWzq/f7lNkCsYu2eBvRPyPbBZriaMawNXr11eH9//+OT+9TTh+F9af1+c3PTe9be8iPvWVedrMPTbh2sDWJ9unB2dtbdC9c/9z+5L8M6dbK2D2Y+DfjVgFgHz1nrUlbdG/7NCbnO89nhc9b+f/M+Z/19VERjDbzzQY8sVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1Z4sWb1jZ5WrOj6ssKLNatv9LRiRdeXFV6sWX2jpxUrur6s8GLN6hs9rVjR9WWFF2tW3+hpxYquLyu8WLP6Rk8rVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1b4n4Ds4UXrUfTOAAAAAElFTkSuQmCC" alt="...">
        </a>
    </div>
    <div class="col-sm-6 col-md-3">
        <a href="<?php echo $this->createUrl('/blog/blogComment/admin'); ?>" class="thumbnail">
            <p class="caption" style="text-align: center;">Manage Comments</p>
            <img class="img-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAC0CAYAAADraNxXAAAFeUlEQVR4Xu3YvUscURiF8buFgtoq2oqtNoIo/vtWKoidWIudrJ0gfiTcCXczTHZmN+menMcqupnsed/z82Z2ZvP5/Efxyw0ANjATK6AlI3YbEKsQMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA2IFVOVQcWqAcwGxIqpyqBi1QBmA2LFVGVQsWoAswGxYqoyqFg1gNmAWDFVGVSsGsBsQKyYqgwqVg1gNiBWTFUGFasGMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA1EY/3+/i7X19fl7e2tXF5elq2trfLw8FCen5//KHB/f7+cnJx0P1923TqNj1339PRUHh8fF//E8fFxOTg46L6fz+fl/v6+e8/61X9tnff8n/5OLNbPz89ydXVVvr6+ymw2W2Dtl7sM1zrXLQMydl37+fb2djk/Py93d3fl9fW1y7OxsdFl7L9Wf7Hq36uvpX1FYu3DqYWPYW2n7OHhYTk6OipT17UTcGdnp8PUrq0n4e7u7uIXY/h+7bq9vb3u5O5f9/Hx0Z247f3bCZx6usZivb29Laenp91J1r8NaKdVg1lPsHaS1Z9NXddOxYuLi3Jzc7M4EaeumzpZX15elmJteD1ZgzYwde85PFVX3R7U11fdIoy939h1wwztZBVrENI26hieVR+gpl6vp2v9r73/gWzq/f7lNkCsYu2eBvRPyPbBZriaMawNXr11eH9//+OT+9TTh+F9af1+c3PTe9be8iPvWVedrMPTbh2sDWJ9unB2dtbdC9c/9z+5L8M6dbK2D2Y+DfjVgFgHz1nrUlbdG/7NCbnO89nhc9b+f/M+Z/19VERjDbzzQY8sVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1Z4sWb1jZ5WrOj6ssKLNatv9LRiRdeXFV6sWX2jpxUrur6s8GLN6hs9rVjR9WWFF2tW3+hpxYquLyu8WLP6Rk8rVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1b4n4Ds4UXrUfTOAAAAAElFTkSuQmCC" alt="...">
        </a>
    </div>
    <div class="col-sm-6 col-md-3">
        <a href="<?php echo $this->createUrl('/blog/blogTerms/category'); ?>" class="thumbnail">
            <p class="caption" style="text-align: center;">Manage Categories</p>
            <img class="img-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAC0CAYAAADraNxXAAAFeUlEQVR4Xu3YvUscURiF8buFgtoq2oqtNoIo/vtWKoidWIudrJ0gfiTcCXczTHZmN+menMcqupnsed/z82Z2ZvP5/Efxyw0ANjATK6AlI3YbEKsQMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA2IFVOVQcWqAcwGxIqpyqBi1QBmA2LFVGVQsWoAswGxYqoyqFg1gNmAWDFVGVSsGsBsQKyYqgwqVg1gNiBWTFUGFasGMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA1EY/3+/i7X19fl7e2tXF5elq2trfLw8FCen5//KHB/f7+cnJx0P1923TqNj1339PRUHh8fF//E8fFxOTg46L6fz+fl/v6+e8/61X9tnff8n/5OLNbPz89ydXVVvr6+ymw2W2Dtl7sM1zrXLQMydl37+fb2djk/Py93d3fl9fW1y7OxsdFl7L9Wf7Hq36uvpX1FYu3DqYWPYW2n7OHhYTk6OipT17UTcGdnp8PUrq0n4e7u7uIXY/h+7bq9vb3u5O5f9/Hx0Z247f3bCZx6usZivb29Laenp91J1r8NaKdVg1lPsHaS1Z9NXddOxYuLi3Jzc7M4EaeumzpZX15elmJteD1ZgzYwde85PFVX3R7U11fdIoy939h1wwztZBVrENI26hieVR+gpl6vp2v9r73/gWzq/f7lNkCsYu2eBvRPyPbBZriaMawNXr11eH9//+OT+9TTh+F9af1+c3PTe9be8iPvWVedrMPTbh2sDWJ9unB2dtbdC9c/9z+5L8M6dbK2D2Y+DfjVgFgHz1nrUlbdG/7NCbnO89nhc9b+f/M+Z/19VERjDbzzQY8sVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1Z4sWb1jZ5WrOj6ssKLNatv9LRiRdeXFV6sWX2jpxUrur6s8GLN6hs9rVjR9WWFF2tW3+hpxYquLyu8WLP6Rk8rVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1b4n4Ds4UXrUfTOAAAAAElFTkSuQmCC" alt="...">
        </a>
    </div>
    <div class="col-sm-6 col-md-3">
        <a href="<?php echo $this->createUrl('/blog/blogTerms/tag'); ?>" class="thumbnail">
            <p class="caption" style="text-align: center;">Manage Tags</p>
            <img class="img-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAC0CAYAAADraNxXAAAFeUlEQVR4Xu3YvUscURiF8buFgtoq2oqtNoIo/vtWKoidWIudrJ0gfiTcCXczTHZmN+menMcqupnsed/z82Z2ZvP5/Efxyw0ANjATK6AlI3YbEKsQMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA2IFVOVQcWqAcwGxIqpyqBi1QBmA2LFVGVQsWoAswGxYqoyqFg1gNmAWDFVGVSsGsBsQKyYqgwqVg1gNiBWTFUGFasGMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA1EY/3+/i7X19fl7e2tXF5elq2trfLw8FCen5//KHB/f7+cnJx0P1923TqNj1339PRUHh8fF//E8fFxOTg46L6fz+fl/v6+e8/61X9tnff8n/5OLNbPz89ydXVVvr6+ymw2W2Dtl7sM1zrXLQMydl37+fb2djk/Py93d3fl9fW1y7OxsdFl7L9Wf7Hq36uvpX1FYu3DqYWPYW2n7OHhYTk6OipT17UTcGdnp8PUrq0n4e7u7uIXY/h+7bq9vb3u5O5f9/Hx0Z247f3bCZx6usZivb29Laenp91J1r8NaKdVg1lPsHaS1Z9NXddOxYuLi3Jzc7M4EaeumzpZX15elmJteD1ZgzYwde85PFVX3R7U11fdIoy939h1wwztZBVrENI26hieVR+gpl6vp2v9r73/gWzq/f7lNkCsYu2eBvRPyPbBZriaMawNXr11eH9//+OT+9TTh+F9af1+c3PTe9be8iPvWVedrMPTbh2sDWJ9unB2dtbdC9c/9z+5L8M6dbK2D2Y+DfjVgFgHz1nrUlbdG/7NCbnO89nhc9b+f/M+Z/19VERjDbzzQY8sVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1Z4sWb1jZ5WrOj6ssKLNatv9LRiRdeXFV6sWX2jpxUrur6s8GLN6hs9rVjR9WWFF2tW3+hpxYquLyu8WLP6Rk8rVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1b4n4Ds4UXrUfTOAAAAAElFTkSuQmCC" alt="...">
        </a>
    </div>
    <div class="col-sm-6 col-md-3">
        <a href="<?php echo $this->createUrl('/blog/blogOptions/admin'); ?>" class="thumbnail">
            <p class="caption" style="text-align: center;">Blog Settings</p>
            <img class="img-circle" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAC0CAYAAADraNxXAAAFeUlEQVR4Xu3YvUscURiF8buFgtoq2oqtNoIo/vtWKoidWIudrJ0gfiTcCXczTHZmN+menMcqupnsed/z82Z2ZvP5/Efxyw0ANjATK6AlI3YbEKsQMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA2IFVOVQcWqAcwGxIqpyqBi1QBmA2LFVGVQsWoAswGxYqoyqFg1gNmAWDFVGVSsGsBsQKyYqgwqVg1gNiBWTFUGFasGMBsQK6Yqg4pVA5gNiBVTlUHFqgHMBsSKqcqgYtUAZgNixVRlULFqALMBsWKqMqhYNYDZgFgxVRlUrBrAbECsmKoMKlYNYDYgVkxVBhWrBjAbECumKoOKVQOYDYgVU5VBxaoBzAbEiqnKoGLVAGYDYsVUZVCxagCzAbFiqjKoWDWA2YBYMVUZVKwawGxArJiqDCpWDWA2IFZMVQYVqwYwGxArpiqDilUDmA1EY/3+/i7X19fl7e2tXF5elq2trfLw8FCen5//KHB/f7+cnJx0P1923TqNj1339PRUHh8fF//E8fFxOTg46L6fz+fl/v6+e8/61X9tnff8n/5OLNbPz89ydXVVvr6+ymw2W2Dtl7sM1zrXLQMydl37+fb2djk/Py93d3fl9fW1y7OxsdFl7L9Wf7Hq36uvpX1FYu3DqYWPYW2n7OHhYTk6OipT17UTcGdnp8PUrq0n4e7u7uIXY/h+7bq9vb3u5O5f9/Hx0Z247f3bCZx6usZivb29Laenp91J1r8NaKdVg1lPsHaS1Z9NXddOxYuLi3Jzc7M4EaeumzpZX15elmJteD1ZgzYwde85PFVX3R7U11fdIoy939h1wwztZBVrENI26hieVR+gpl6vp2v9r73/gWzq/f7lNkCsYu2eBvRPyPbBZriaMawNXr11eH9//+OT+9TTh+F9af1+c3PTe9be8iPvWVedrMPTbh2sDWJ9unB2dtbdC9c/9z+5L8M6dbK2D2Y+DfjVgFgHz1nrUlbdG/7NCbnO89nhc9b+f/M+Z/19VERjDbzzQY8sVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1Z4sWb1jZ5WrOj6ssKLNatv9LRiRdeXFV6sWX2jpxUrur6s8GLN6hs9rVjR9WWFF2tW3+hpxYquLyu8WLP6Rk8rVnR9WeHFmtU3elqxouvLCi/WrL7R04oVXV9WeLFm9Y2eVqzo+rLCizWrb/S0YkXXlxVerFl9o6cVK7q+rPBizeobPa1Y0fVlhRdrVt/oacWKri8rvFiz+kZPK1Z0fVnhxZrVN3pasaLrywov1qy+0dOKFV1fVnixZvWNnlas6Pqywos1q2/0tGJF15cVXqxZfaOnFSu6vqzwYs3qGz2tWNH1ZYUXa1bf6GnFiq4vK7xYs/pGTytWdH1Z4cWa1Td6WrGi68sKL9asvtHTihVdX1b4n4Ds4UXrUfTOAAAAAElFTkSuQmCC" alt="...">
        </a>
    </div>
</div>