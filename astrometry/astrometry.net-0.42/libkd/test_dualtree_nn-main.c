

/* This is auto-generated code. Edit at your own peril. */

#include <stdio.h>
#include <string.h>
#include <stdlib.h>

#include "cutest.h"


extern void test_nn_1(CuTest*);


void RunAllTests(void) 
{
    CuString *output = CuStringNew();
    CuSuite* suite = CuSuiteNew();


    SUITE_ADD_TEST(suite, test_nn_1);

    CuSuiteRun(suite);
    CuSuiteSummary(suite, output);
    CuSuiteDetails(suite, output);

    printf("%s\n", output->buffer);

    CuSuiteFree(suite);
    CuStringFree(output);
}

int main(int argc, char** args)
{
    if (argc > 1 && !strcmp(args[1], "-d")) {
        printf("Setting die on fail.\n");
        CuDieOnFail();
    }
    RunAllTests();
    return 0;
}
