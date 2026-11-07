# Folio Theme

Thème Filament du panel admin : titres en serif, coins arrondis, boutons pilule, champs remplis, pagination ronde, sidebar active. Le plugin enregistre aussi la palette verte chaude, le gris chaud, Albert Sans et Lora.

PHP 8.2+ et Filament 5.

## Installation

Depuis une application Laravel située à côté de ce dossier (par exemple `API-Folio` et `filament-folio-theme` dans le même dossier `projet`) :

```bash
composer config repositories.filament-folio-theme '{"type":"path","url":"../filament-folio-theme"}'
composer require renaud/filament-folio-theme
```

Si le panel n'a pas encore de thème Vite :

```bash
php artisan make:filament-theme
```

## Panel

```php
use Renaud\FilamentFolioTheme\FolioThemePlugin;

$panel
    ->plugin(FolioThemePlugin::make())
    ->viteTheme('resources/css/filament/admin/theme.css');
```

Au démarrage du panel, le plugin pose Albert Sans, Lora, puis les palettes `primary` et `gray`. Ces deux couleurs remplacent celles enregistrées avant, parce que Filament garde le dernier jeu pour chaque nom.

Les palettes sont aussi disponibles seules :

```php
use Renaud\FilamentFolioTheme\FolioThemeColor;

$panel->colors(FolioThemeColor::palette());
```

## CSS

Dans `resources/css/filament/admin/theme.css` de l'application, importe le CSS du package après celui de Filament. Les directives `@source` restent dans l'application : Tailwind se compile ici, pas dans le package.

```css
@import '../../../../vendor/filament/filament/resources/css/theme.css';
@import '../../../../vendor/renaud/filament-folio-theme/resources/css/theme.css';

@source '../../../../app/Filament/**/*';
@source '../../../../resources/views/filament/**/*';
```

Puis :

```bash
npm run build
```

Ou `npm run dev` pendant le développement.
