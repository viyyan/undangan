# clove
Clove web app
## Installation

Requires [Node.js](https://nodejs.org/) v14 to run.

Follow this step to install this project locally:
1. Clone project with ```git clone project_url project_folder```
2. Enter project direction ```cd project_folder```
3. Install depedencies with ```npm install``` or ```yarn install```
4. Run command ```yarn start``` to begin developing 
5. Run command ```yarn build``` for build production version

## Token Classes

### Font Family
- ```.font--main``` -> DM Sans

### Font Size
- ```.text--2xs``` -> 11px
- ```.text--xs``` -> 12px
- ```.text--sm``` -> 14px
- ```.text--md``` -> 16px
- ```.text--lg``` -> 24px
- ```.text--xl``` -> 32px
- ```.text--2xl``` -> 36px
- ```.text--3xl``` -> 48px

### Background color
- ```.bg--primary``` -> #a81c1b
- ```.bg--main-red``` -> #a81c1b
- ```.bg--main-red-2``` -> #981314
- ```.bg--main-red-3``` -> #801414
- ```.bg--main-red-4``` -> #6d1313
- ```.bg--main-red-5``` -> #53090a
- ```.bg--red``` -> #a31d1e
- ```.bg--red-2``` -> #811717
- ```.bg--red-3``` -> #6a1415
- ```.bg--white``` -> #ffffff
- ```.bg--black``` -> #2b2b2b

### Text color
- ```.text--primary``` -> #a81c1b
- ```.text--white``` -> #ffffff
- ```.text--black``` -> #2b2b2b

### Border color
- ```.border--primary``` -> #a81c1b
- ```.border--white``` -> #ffffff
- ```.border--black``` -> #2b2b2b

### Gradient
- ```.gradient--primary``` -> #a81c1b - #f8f0ee

### Container
- ```.container``` -> max-width: 1300px
- ```.container--md``` -> max-width: 1090px
- ```.container--sm``` -> max-width: 940px
- ```.container--xs``` -> max-width: 860px

### Grid
- ```.grid``` -> columns wrapper
- ```.column--50``` -> width: 50%
- ```.column--33``` -> width: 33.333333%
- ```.column--25``` -> width: 25%
- ```.gap--md``` -> space: 20px
- ```.gap--lg``` -> space: 30px
- ```.gap--xl``` -> space: 40px


#### Example
```
<div class="grid gap--md">
  <div class="column--50">
    <div />
  </div>
  <div class="column--50">
    <div />
  </div>
</div>
```