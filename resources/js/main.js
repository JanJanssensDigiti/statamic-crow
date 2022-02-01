//Custom condition
Statamic.$conditions.add('hasTwoColumns', ({ values }) => {
    return values.columns.length == 2;
});